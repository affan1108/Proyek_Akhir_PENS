<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class ApiController extends Controller
{
    public function payment_handler(Request $request){
        $json = json_decode($request->getContent());
        // return $json;

        $signature_key = hash('sha512',$json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));
        // return $signature_key;

        if($signature_key != $json->signature_key){
            return abort(404);
        }
        else{
        //status berhasil
        $payment = Payment::where('order_id', $json->order_id)->first();
        return $payment->update(['status'=>$json->transaction_status]);
        }
    }
}
