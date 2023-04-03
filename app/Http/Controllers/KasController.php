<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;

class KasController extends Controller
{
    public function insertkas(Request $request){
        $data = $request->all();
        Kas::create($data);
        return redirect()->route('report',compact('data'));
    }

    public function deletekas($id){
        $data = Kas::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatekas(Request $request, $id){
        $data = Kas::findOrFail($id);
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->update();
        // dd($data);
        return redirect()->back();
    }
}
