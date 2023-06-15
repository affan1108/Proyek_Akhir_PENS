<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Hijab;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Models\Ekspedisi;
use App\Models\Keranjang;
use App\Models\Ongkir;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Riwayat;
use App\Models\Kas;
use Auth;
use Carbon\Carbon;

class MenuController extends Controller
{
    public function home() {
        $data = Hijab::all();
        $carts = Keranjang::all();
        return view('home', compact('data', 'carts'));
        // return view("pesanansaya", compact('data'));
    }

    public function pesanansaya() {
        $data = Invoice::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->paginate(10);
        return view("pesanansaya", compact('data'));
    }

    public function bantuan() {
        return view("bantuan");
    }

    public function viewpesanan($id)
    {
        $data = Invoice::find($id);
        $pay = Payment::all();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-bLySRwVU1rLQ2e80YHvoIIbF';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data->total,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => Auth::user()->nomer,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('viewpesanan', ['snapToken'=>$snapToken, 'data'=>$data, 'pay'=>$pay]);

        // $data = Payment::find($id);
        // return view('viewpesanan',compact('data'));
    }
    
    public function pesananditerima(Request $request, $id)
    {
        $data = Payment::findOrFail($id);
        $data->diterima = $request->diterima;
        
        $data->update();
        return redirect()->route('penilaianpesanan');
    }

    public function riwayatpesanan() {
        $cart = Keranjang::all()->pluck('invoice_id');
        $data = Payment::orderBy('rating', 'DESC')->whereIn('id', $cart)->where([['diterima', '=', '1'],['rating', '!=', 'null']])->paginate(6);
        // return view("pesanansaya", compact('data'));
        return view("riwayatpesanan", compact('data'));
    }

    public function penilaianpesanan() {
        $cart = Keranjang::all()->pluck('invoice_id');
        $data = Invoice::with('payment')->whereIn('id', $cart)->orderBy('id', 'ASC')->paginate(6);
        return view("penilaianpesanan", compact('data'));
    }

    public function print($id) {
        $data = Payment::find($id);
        return view('print',compact('data'));
    }

    public function daftarproduk() {
        $data = Hijab::all();
        return view("daftarproduk", compact('data'));
    }

    public function daftarpesanan() {
        $cart = Keranjang::all()->pluck('invoice_id');
        $data = Invoice::with('payment')->whereIn('id', $cart)->orderBy('id', 'ASC')->paginate(6);
        $items = Invoice::with('payment')->onlyTrashed()->orderBy('id', 'ASC')->paginate(6);
        return view("daftarpesanan", compact('data','items','cart'));
    }

    public function daftarpenilaian() {
        // $data = Payment::where('rating','!=',null)->pluck('id');
        // $invoice = Invoice::where('payment_id', $data)->pluck('id');
        // $cart = Keranjang::where('invoice_id', $invoice)->get();
        // dd($cart);
        $data = Payment::paginate(10);
        return view("daftarpenilaian", compact('data'));
    }

    public function addproduk() {
        return view("addproduk");
    }

    public function edit($id) {
        $data = Hijab::find($id);
        return view('editproduk', compact('data'));
    }

    public function warna() {
        $data = Warna::paginate(5);
        $ukur = Ukuran::all();
        return view('tables.warna', compact('data','ukur'));
    }

    public function payment() {
        $data = Payment::orderBy('status', 'ASC')->paginate(5);
        // $ukur = Ukuran::all();
        return view('tables.payment', compact('data'));
    }

    public function report() {
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

        // $paymentID = Payment::all()->pluck('id');
        // dd($paymentID);
        // $hppInvoice = Invoice::where('payment_id', '!=', null)->whereIn('payment_id', $paymentID)->sum('hpp');
        // dd($hppInvoice);

        $monthlyProfits = Payment::select(
            DB::raw('MONTH(created_at) as month'), 
            DB::raw("SUM(gross_amount) as total_profit")
        )
        ->whereYear('created_at', date('Y'))
        ->where('diterima', '!=', null)
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $donutChart = [];
        
        for($j=1; $j<=12; $j++){
            $months = date('F',mktime(0,0,0,$j,1));

            array_push($donutChart,$months);
        }

        $chartData = [];
        $chartColors = [];

        foreach ($monthlyProfits as $item) {
            $chartData[] = $item->value; // Mengambil nilai yang ingin ditampilkan di chart
            $chartColors[] = $item->color; // Mengambil warna untuk setiap data
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
            $y = date('F',mktime(0,0,0,$i,1));

            foreach($monthlyProfits as $monthly){
                if($monthly->month == $i){
                    $y = $monthly->count;
                    break;
                }
            }

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

        
        // $profitPercentage = ($revenue - $expense) / $revenue * 100;

        $report = Payment::all();
        $kas = Kas::all();
        $user = User::all();
        $produk = Hijab::all();

        // dd($monthlyProfits);
        
        return view('report', compact('data','kas','user','produk','datasets','labels','report','monthlyProfits','donutChart', 'chartData', 'chartColors', 'months'));
    
        
        // return view('report', compact('data','kas','user','produk','datasets','labels','profitPercentage','report'));
    }

    public function ukuran() {
        $data = Ukuran::all();
        return view('tables.ukuran', compact('data'));
    }

    public function ekspedisi() {
        $data = Ekspedisi::all();
        return view('tables.ekspedisi', compact('data'));
    }

    public function bill() {
        $rows = Invoice::all()->last();
        return view('bill', compact('rows'));
    }

    public function bill_cart($id) {
        $rows = Invoice::with('cart')->find($id);
        return view('billcart', compact('rows'));
    }

    public function show() {
        $rows = Keranjang::all();
        return view('keranjangbill', compact('rows'));
    }

    public function catalog(Request $request) {

        if($request->has('search')){
            // dd($request);
            $data = Hijab::where('nama','LIKE','%'.$request->search.'%')->paginate(100);
        } else {
            $data = Hijab::all();
        }
        return view('catalog', compact('data'));
    }

    public function katalog(Request $request) {

        $theme = $request->cookie('theme');
        if($request->has('search')){
            // dd($request);
            $data = Hijab::where('nama','LIKE','%'.$request->search.'%')->paginate(100);
        } else {
            $data = Hijab::all();
        }
        return view('katalog', compact('data','theme'));
    }

    public function view($id)
    {
        $data = Keranjang::findOrFail($id);

        return view('invoice',compact('data'));
    }
}
