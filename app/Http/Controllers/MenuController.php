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

class MenuController extends Controller
{
    public function home() {
        $data = Hijab::all();
        $carts = Keranjang::all();
        return view('home', compact('data', 'carts'));
        // return view("pesanansaya", compact('data'));
    }

    public function pesanansaya() {
        $data = Invoice::with('payment')->orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->paginate(10);
        return view("pesanansaya", compact('data'));
    }

    public function bantuan() {
        return view("bantuan");
    }

    public function viewpesanan($id)
    {
        $data = Invoice::find($id);

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
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('viewpesanan', ['snapToken'=>$snapToken, 'data'=>$data]);

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
        $data = Payment::orderBy('rating', 'DESC')->where([['diterima', '=', '1'],['rating', '!=', 'null']])->paginate(6);
        // return view("pesanansaya", compact('data'));
        return view("riwayatpesanan", compact('data'));
    }

    public function penilaianpesanan() {
        $data = Payment::all();
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
        $data = Invoice::orderBy('id', 'ASC')->paginate(6);
        return view("daftarpesanan", compact('data'));
    }

    public function daftarpenilaian() {
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
