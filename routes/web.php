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
        $order = Payment::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw('MONTH(created_at) as month')
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $labels = [];
        $val = [];

        for($i=1; $i<=12; $i++){
            $month = date('F',mktime(0,0,0,$i,1));
            $count = 0;

            foreach($order as $pesan){
                if($pesan->month == $i){
                    $count = $pesan->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($val,$count);
        }

        $datasets = [
            [
                'label' => 'Jumlah Order Masuk',
                'data' => $val,
            ]
        ];

        // dd($data);
        $data = Payment::all();
        $kas = Kas::all();
        $user = User::all();
        $produk = Hijab::all();
        return view('report', compact('data','kas','user','produk','datasets','labels'));
    }
    else
        return view('dashboard', compact('data', 'carts'));
})->middleware(['auth', 'verified']);

// Route::get('/detailhijab/{id}', function ($id) {
//     $data = Hijab::find($id);
//     return view('detailhijab', compact('data'));
// });

Route::post('/cookie/create/update',[App\Http\Controllers\ThemeController::class, 'createAndUpdate'])->name('create-update');


require __DIR__.'/auth.php';
