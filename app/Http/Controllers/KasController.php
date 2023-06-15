<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;
use App\Models\Hijab;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Keranjang;
use App\Models\Payment;
use Session;
use DB;
use Carbon\Carbon;
use App\Models\Warna;

class KasController extends Controller
{
    public function insertkas(Request $request){
        // dd($request);
        $data = $request->all();
        Kas::create($data);
        Session::flash('status', 'Data Berhasil Ditambah');
        return redirect()->route('report',compact('data'));
    }

    public function deletekas($id){
        $data = Kas::find($id);
        $data->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function updatekas(Request $request, $id){
        $data = Kas::findOrFail($id);
        $data->nama = $request->nama;
        $data->harga_jual = $request->harga_jual;
        $data->harga_beli = $request->harga_beli;
        $data->update();
        // dd($data);
        Session::flash('status', 'Data Berhasil Di Update');
        return redirect()->back();
    }

    public function filter(Request $request){
        $start = $request->start_date;
        $end = $request->end_date;

        $order = Invoice::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw('MONTH(created_at) as month')
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $pay = Payment::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw('MONTH(created_at) as month')
        )
        ->whereYear('created_at', date('Y'))
        ->where('diterima', 1)
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $items = Invoice::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw('MONTH(created_at) as month')
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month')
        ->orderBy('month')
        ->onlyTrashed()
        ->get();

        $donutChart = [];
        
        for($j=1; $j<=12; $j++){
            $months = date('F',mktime(0,0,0,$j,1));

            array_push($donutChart,$months);
        }

        $labels = [];
        $val = [];
        $vals = [];
        $cancel = [];

        for($i=1; $i<=12; $i++){
            $month = date('F',mktime(0,0,0,$i,1));
            $count = 0;
            $coun = 0;
            $x = 0;

            foreach($order as $pesan){
                if($pesan->month == $i){
                    $count = $pesan->count;
                    break;
                }
            }

            foreach($items as $item){
                if($item->month == $i){
                    $coun = $item->count;
                    break;
                }
            }

            foreach($pay as $pays){
                if($pays->month == $i){
                    $x = $pays->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($val,$count);
            array_push($cancel,$coun);
            array_push($vals,$x);
        }

        $datasets = [
            [
                'label' => 'Order Masuk',
                'data' => $val,
            ],

            [
                'label' => 'Order Dibatalkan',
                'data' => $cancel,
            ],

            [
                'label' => 'Order Sukses',
                'data' => $vals,
            ]
        ];

        $now = Carbon::now();
        $startOfMonth = $now->startOfMonth();
        $endOfMonth = $now->endOfMonth();

        $revenue = Payment::all()
            ->sum('gross_amount');
        $expense = Hijab::all()
            ->sum('harga');

        $profitPercentage = ($revenue - $expense) / $revenue * 100;

        $report = Payment::all();
        $kas = Kas::all();
        $user = User::all();
        $produk = Hijab::all();
        // $data = Invoice::all();
        

        $chartData = [];
        $chartColors = [];

        $monthlyProfits = Payment::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), 
            DB::raw("SUM(gross_amount) as total_profit")
        )
        ->whereYear('created_at', date('Y'))
        ->where('diterima', '!=', null)
        ->groupBy('month')
        ->orderBy('month')
        ->get();
        $donutChart = [];
        $label = [];
        
        foreach ($monthlyProfits as $z) {
            $bulan = Carbon::createFromFormat('Y-m', $z->month)->locale('id')->monthName; // Mengubah angka menjadi nama bulan
            $label[] = $bulan;
        }
        foreach ($monthlyProfits as $item) {
            $chartData[] = $item->value; // Mengambil nilai yang ingin ditampilkan di chart
            $chartColors[] = $item->color; // Mengambil warna untuk setiap data
        }
        
        $data = Invoice::whereDate('created_at','>=',$start)->whereDate('created_at','<=',$end)->get();
        // dd($data);
        // return view('report', compact('data','kas','user','produk','datasets','labels'));
        return view('report', compact('label','data','monthlyProfits','kas','user','donutChart','produk','datasets','labels','profitPercentage','report','months'));
    }
}
