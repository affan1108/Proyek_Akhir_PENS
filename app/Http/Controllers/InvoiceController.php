<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;
use App\Models\Province;
use App\Models\Keranjang;
use App\Models\Ongkir;
use App\Models\Invoice;
use App\Models\Voucher;
use App\Models\Payment;
use App\Models\Warna;
use App\Models\Hijab;
use Auth;
use DB;

class InvoiceController extends Controller
{
    public function invoice() {
        $data = Keranjang::all()->last();
        // $rows = Keranjang::all();
        $ongkir = Ongkir::all()->last();
        $kupon = Voucher::all();
        $couriers   = Courier::pluck('title', 'code');
        $provinces  = Province::pluck('title', 'province_id');
        return view("invoice", compact('ongkir','couriers', 'provinces', 'kupon', 'data'));
    }

    public function index(Request $request) {
        $rows = Keranjang::all();
        $ongkir = Ongkir::all()->last();
        $kupon = Voucher::all();
        $couriers   = Courier::pluck('title', 'code');
        $provinces  = Province::pluck('title', 'province_id');

        return view("invoicecart", compact('ongkir','couriers', 'provinces', 'kupon', 'rows'));
    }

    public function deleteinvoice($id){
        $data = Keranjang::find($id);
        $data->delete();
        return redirect()->back();
        // return view("detailhijab");
    }

    public function editinvoice($id) {
        $data = Keranjang::find($id);
        $rows = Voucher::all();
        return view('voucher', compact('data', 'rows'));
    }

    public function pilihvoucher(Request $request, $id){
        $data = Keranjang::findOrFail($id);
            $data->voucher_id = $request->voucher_id;
        
        $data->update();
        return redirect()->route('invoice')->with('toast_success', 'Data Berhasil Di update');
    }

    public function insertinvoice(Request $request){
        // $request->request->add(['status' => 'Belum Dibayar']);
        // dd($request);
        // $data = Invoice::create($request->all());
        $data = new Invoice;
        $data->user_id = $request->user_id;
        $data->keranjang_id = isset($request->keranjang_id) ? $request->keranjang_id : null;
        $data->ongkir_id = isset($request->ongkir_id) ? $request->ongkir_id : null;
        $data->voucher_id = $request->voucher_id;
        $data->warna_id = $request->warna_id;
        $data->jumlah = $request->jumlah;
        $data->total = $request->total;
        $data->diskon = $request->diskon;
        $data->status = $request->status;
        $data->save();
        
        $cart = Keranjang::where('id', $request->keranjang_id)->first();
        $cart->payment = 1;
        $cart->update();
        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->total,
            ),
            // 'item_details' => array(
            //     [
            //       'id'=> 'a01',
            //       'price'=> 7000,
            //       'quantity'=> 1,
            //       'name'=> 'Apple'
            //     ],
            //     [
            //       'id'=> 'b02',
            //       'price'=> 3000,
            //       'quantity'=> 2,
            //       'name'=> 'Orange'
            //     ]
            // ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => Auth::user()->nomer,
            ),
        );
        // dd($data);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('bill', compact('data', 'snapToken'));
    }

    public function insertinvoicecart(Request $request){
        // dd($request);
        $x = Keranjang::whereIn('id', $request->checkbox)->pluck('produk_id');
        $y = Keranjang::whereIn('id', $request->checkbox)->pluck('jumlah');
        $hpp = Hijab::whereIn('id', $x)->pluck('harga');
        // dd($hpp);
        $total = "";
        $result = [];
        if (count($hpp) === count($y)) {
            $count = count($hpp);
            for ($i = 0; $i < $count; $i++) {
                $result[] = $hpp[$i] * $y[$i];
                $total = collect($result)->sum();
            }
            // dd($total);
            // DB::table('warnas')->where('id', $cart[$key])->update($min);
        }
        // dd($hpp);
        $data = new Invoice;
        $data->user_id = $request->user_id;
        // $data->keranjang_id = isset($request->keranjang_id) ? $request->keranjang_id : null;
        $data->ongkir_id = isset($request->ongkir_id) ? $request->ongkir_id : null;
        $data->voucher_id = $request->voucher_id;
        // $data->warna_id = $request->warna_id;
        // $data->jumlah += $request->jumlah;
        $data->jumlah = Keranjang::whereIn('id', $request->checkbox)->sum('jumlah');
        $data->total = $request->total;
        // $data->status = $request->status;
        $data->hpp = $total;
        // dd($data->jumlah);
        $data->save();
        
        

        $cart = Keranjang::whereIn('id', $request->checkbox)->pluck('warna_id');
        // dd($cart);
        $qty = Keranjang::whereIn('id', $request->checkbox)->pluck('jumlah');
        $cpty = Warna::whereIn('id', $cart)->pluck('stok');
        

        $result = [];
        if (count($cpty) === count($qty)) {
            $count = count($cpty);
            for ($i = 0; $i < $count; $i++) {
                $result[] = $cpty[$i] - $qty[$i];
            }
            // dd($result);
            
            foreach($cart as $key=>$value){
                foreach($result as $key=>$item){
                    $min = [
                        'stok' => $result[$key],
                    ];
                    // dd($min);
                    DB::table('warnas')->where('id', $cart[$key])->update($min);
                }
            }

            // dd($min);
            
        }

        
        
        foreach($request->checkbox as $key=>$name) {
            $insert = [
                'invoice_id' => $data->id,
                'payment' => 1
            ];
            DB::table('keranjangs')->where('id', $request->checkbox[$key])->update($insert);
        }

        
        // dd($data, $result, $insert);
        // DB::table('warnas')->where('id', $data->keranjang->warna_id)->update($min);
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->total,
            ),
            // 'item_details' => array(
            //     [
            //       'id'=> 'a01',
            //       'price'=> 7000,
            //       'quantity'=> 1,
            //       'name'=> 'Apple'
            //     ],
            //     [
            //       'id'=> 'b02',
            //       'price'=> 3000,
            //       'quantity'=> 2,
            //       'name'=> 'Orange'
            //     ]
            // ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => Auth::user()->nomer,
            ),
        );
        // dd($insert);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // return redirect()->back()->with($snapToken);
        
        // dd($request->checkbox);
        return view('billcart', compact('data', 'snapToken'))->with('toast_success', 'Produk Berhasil Dipesan');
        // return url("billcart/{$data->id}");
    }

    public function payment_post(Request $request){
        return $request;
    }

    public function deletepesanan($id){
        $data = Invoice::find($id);
        $data->delete();
        return redirect()->route('dashboard');
        // return view("detailhijab");
    }
}
