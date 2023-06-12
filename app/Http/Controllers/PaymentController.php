<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Warna;
use App\Models\Keranjang;
use App\Models\Invoice;
use Session;
use DB;
use Carbon\Carbon;

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
        // dd($request);
        $order = new Payment;
        $order->status = $json->transaction_status;
        $order->user_id = $request->user_id;
        $order->invoice_id = $request->invoice_id;
        // $order->warna_id = $request->warna_id;
        $order->jumlah = $request->jumlah;
        $order->diterima = isset($request->diterima) ? $request->diterima : null;
        // $order->number = $request->get('number');
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        $order->save();

        // $cpty = Warna::where('id', $order->invoice->keranjang->warna_id)->sum('stok');
        // foreach($request->checkbox as $key=>$name) {
        //     $insert = [
        //         'payment_id' => $order->id,
        //     ];

        //     $min = [
        //         'id' => $order->invoice->keranjang->warna_id,
        //         'stok' => round($cpty - ($order->invoice->keranjang->jumlah), PHP_ROUND_HALF_UP),
        //     ];
        //     DB::table('warnas')->where('id', $request->checkbox[$key])->update($min);
        //     DB::table('invoices')->where('id', $request->checkbox[$key])->update($insert);
        // }

        // dd($min);
        $pay = Invoice::where('id', $order->invoice_id)->first();
        $pay->payment_id = $order->id;
        
        
        // $cpty = Warna::where('id', $order->invoice->keranjang->warna_id)->sum('stok');
        // $min = [
        //     'id' => $order->invoice->keranjang->warna_id,
        //     'stok' => round($cpty - ($order->invoice->keranjang->jumlah), PHP_ROUND_HALF_UP),
        // ];

        // dd($order, $color, $insert);
        // DB::table('warnas')->where('id', $order->invoice->keranjang->warna_id)->update($min);
        $pay->update();
        

        return redirect(('pesanansaya'));

        // return $order->save() ? redirect(('pesanansaya'))->with('alert-success', 'Order berhasil dibuat') : redirect(('pesanansaya'))->with('alert-failed', 'Terjadi kesalahan');
    }

    public function batal(Request $request, $id){
        // dd($request);
        

        $order = Invoice::with('keranjang')->find($id);
        $order->warna_id = $request->warna_id;
        $order->jumlah = $request->jumlah;

        $delete = Keranjang::where('invoice_id', $id);
        $cart = Keranjang::where('invoice_id', $id)->pluck('warna_id');
        // dd($cart);
        $qty = Keranjang::where('invoice_id', $id)->pluck('jumlah');
        // dd($qty);
        $cpty = Warna::whereIn('id', $cart)->pluck('stok');
        // dd($cpty);

        $result = [];
        if (count($cpty) === count($qty)) {
            $count = count($cpty);
            for ($i = 0; $i < $count; $i++) {
                $result[] = $cpty[$i] + $qty[$i];
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

        // dd($order, $color);
        // Warna::where('id', $request->warna_id)->update($color);
        $order->delete();
        $delete->delete();

        // $delete = Invoice::where('id', $id)->pluck('deleted_at');
        // dd($delete);
        Session::flash('status', 'Pesanan Berhasil Dibatalkan');
        return redirect('pesanansaya');
    }

    public function nilai($id){
        $data = Invoice::find($id);
        $pay = Payment::all();
        return view('nilaipesanan',['data' => $data,'pay' => $pay]);
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
        // $data = Invoice::findOrFail($id);
        // dd($id);
        $pay = Payment::where('invoice_id', $id)->first();
        // dd($pay);
        $pay->rating = $request->rating;
        $pay->foto = $request->foto;
        $pay->deskripsi = $request->deskripsi;
        if($request->hasFile('foto')){
            $pay['foto']=$request->file('foto')->getClientOriginalName();
        }
        $pay->update();
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
