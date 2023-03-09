<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ongkir;

class OngkirController extends Controller
{
    public function insertongkir(Request $request){
        $data = $request->validate([
            'user' => 'required',
            'layanan' => '',
            'kota' => 'required',
            'kurir' => 'required',
            'ongkir' => 'required',
        ]);
        $data = new Ongkir;
        $data->user = $request->user;
        $data->layanan = $request->layanan;
        $data->kota = $request->kota;
        $data->kurir = $request->kurir;
        $data->ongkir = $request->ongkir;
        // dd($data);
        $data->save();
        return redirect()->route('invoice');
    }

    public function deleteongkir($id){
        $data = Ongkir::find($id);
        $data->delete();
        return redirect()->route('home');
        // return view("detailhijab");
    }
}
