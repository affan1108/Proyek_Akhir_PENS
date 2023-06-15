<?php

use Illuminate\Support\Facades\Route;
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
use Carbon\Carbon;
// use Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = Hijab::paginate(4);
    $carts = Keranjang::all();
    return view('home', compact('data', 'carts'));
    // return view('home');
});

Route::get('/dashboard', function () {
    $data = Hijab::paginate(4);
    $carts = Keranjang::all();
    if(Auth::user()->name == 'admin'){
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

        $data = Invoice::all();
        $kas = Kas::all();
        $user = User::all();
        $produk = Hijab::all();
        // $data = Invoice::all();

        // dd($monthlyProfits);
        
        return view('report', compact('label','data','kas','user','produk','datasets','labels','monthlyProfits','donutChart', 'chartData', 'chartColors'));
    }
    else
        // $pay = Payment::where('diterima', 0)->pluck('id');
        // // dd($pay);
        // $data = Invoice::where('payment_id', !null)->count();
        // dd($data);
        return view('dashboard', compact('data', 'carts'));
})->middleware(['auth', 'verified']);

// Route::get('/detailhijab/{id}', function ($id) {
//     $data = Hijab::find($id);
//     return view('detailhijab', compact('data'));
// });

Route::post('/cookie/create/update',[App\Http\Controllers\ThemeController::class, 'createAndUpdate'])->name('create-update');


require __DIR__.'/auth.php';
