<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;
use Session;

class KasController extends Controller
{
    public function insertkas(Request $request){
        // dd($request);
        $data = $request->all();
        Kas::create($data);
        Session::flash('status', 'Data Berhasil Ditambah');
        return redirect()->route('report',compact('data'));
    }

    public function deletekas($id){
        $data = Kas::find($id);
        $data->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function updatekas(Request $request, $id){
        $data = Kas::findOrFail($id);
        $data->nama = $request->nama;
        $data->harga_jual = $request->harga_jual;
        $data->harga_beli = $request->harga_beli;
        $data->update();
        // dd($data);
        Session::flash('status', 'Data Berhasil Di Update');
        return redirect()->back();
    }
}
