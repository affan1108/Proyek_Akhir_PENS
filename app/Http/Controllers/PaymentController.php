<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Warna;
use Session;

class PaymentController extends Controller
{
    public function payment(){
        //SAMPLE REQUEST START HERE

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
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('pay', ['snap_token'=>$snapToken]);
    }

    public function payment_post(Request $request){
        $json = json_decode($request->get('json','user_id','invoice_id', 'warna_id', 'jumlah'));
        // return $json;
        $order = new Payment;
        $order->status = $json->transaction_status;
        $order->user_id = $request->user_id;
        $order->invoice_id = $request->invoice_id;
        $order->warna_id = $request->warna_id;
        $order->jumlah = $request->jumlah;
        $order->diterima = isset($request->diterima) ? $request->diterima : null;
        // $order->number = $request->get('number');
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        $cpty = Warna::where('id', $request->warna_id)->sum('stok');
        $color = [
            'id' => $request->warna_id,
            'stok' => round($cpty - ($request->jumlah), PHP_ROUND_HALF_UP),
        ];

        // dd($order, $color);
        Warna::where('id', $request->warna_id)->update($color);
        $order->save();

        return redirect(('pesanansaya'));

        // return $order->save() ? redirect(('pesanansaya'))->with('alert-success', 'Order berhasil dibuat') : redirect(('pesanansaya'))->with('alert-failed', 'Terjadi kesalahan');
    }

    public function batal(Request $request, $id){
        // dd($request);
        $order = Payment::find($id);
        $order->warna_id = $request->warna_id;
        $order->jumlah = $request->jumlah;
        $cpty = Warna::where('id', $request->warna_id)->sum('stok');
        $color = [
            'id' => $request->warna_id,
            'stok' => round($cpty + ($request->jumlah), PHP_ROUND_HALF_UP),
        ];

        // dd($order, $color);
        Warna::where('id', $request->warna_id)->update($color);
        $order->delete();

        Session::flash('status', 'Pesanan Berhasil Dibatalkan');
        return redirect('pesanansaya');
    }

    public function nilai($id){
        $data = Payment::find($id);
        return view('nilaipesanan',compact('data'));
    }

    public function updateresi(Request $request, $id){
        $data = Payment::find($id);
        $data->resi = $request->resi;
        $data->update();
        // dd($data);
        return redirect()->route('daftarpesanan')->with('success', 'Data Berhasil Di update');
    }

    public function penilaian(Request $request, $id)
    {
        $data = Payment::findOrFail($id);
        $data->rating = $request->rating;
        $data->foto = $request->foto;
        $data->deskripsi = $request->deskripsi;
        if($request->hasFile('foto')){
            $data['foto']=$request->file('foto')->getClientOriginalName();
        }
        $data->update();
        return redirect()->route('riwayatpesanan')->with('success', 'Data Berhasil Di update');
    }

    public function deletepayment($id){
        $data = Payment::with("user")->find($id);
        
        if($data->user()->count() > 0){
            return back()->with('error', 'Jenis dokumen ini memiliki data di tabel lain.');
        }
        $data->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('tables.payment');
    }
}
