<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function mail(){
        return view('mail');
    }

    public function send(Request $request){
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data=array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        );

        Mail::to("ameliiacollection1@gmail.com")->send(new SendMail($data));
        return back()->with("toast_success", "Berhasil Mengirimkan Email");

    }
}
