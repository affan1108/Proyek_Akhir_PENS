<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;
use App\Models\Province;
use App\Models\Keranjang;
use App\Models\Ongkir;
use App\Models\Invoice;
use App\Models\Voucher;
use Auth;

class InvoiceController extends Controller
{
    public function invoice() {
        $data = Keranjang::all()->last();
        $ongkir = Ongkir::all()->last();
        $kupon = Voucher::all();
        $couriers   = Courier::pluck('title', 'code');
        $provinces  = Province::pluck('title', 'province_id');
        return view("invoice", compact('data', 'ongkir','couriers', 'provinces', 'kupon'));
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
        $data = Invoice::create($request->all());
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
