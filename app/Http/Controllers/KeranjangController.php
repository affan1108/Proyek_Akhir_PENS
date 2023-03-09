<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Http\Requests\Keranjang\UpdateKeranjangRequest;

class KeranjangController extends Controller
{
    public function keranjang(Request $request) {
        $data = $request->validate([
            'user' => 'required',
            'nama' => 'required',
            'warna' => 'required',
            // 'ukuran' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'hitung' => 'required',
        ]);
        $data = new Keranjang;
        $data->user = $request->user;
        $data->nama = $request->nama;
        $data->warna = $request->warna;
        // $data->ukuran = $request->ukuran;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->hitung = $request->hitung;
        $data->save();
        return redirect()->route('home', compact('data'));
    }

    // public function update(Request $request, $id){
    //     $data = Keranjang::findOrFail($id);
    //     $data->user = $request->user;
    //     $data->nama = $request->nama;
    //     $data->warna = $request->warna;
    //     // $data->ukuran = $request->ukuran;
    //     $data->jumlah = $request->jumlah;
    //     $data->harga = $request->harga;
    //     $data->hitung = $request->hitung;
    //     $data->update();
    //     return redirect()->route('invoice')->with('toast_success', 'Data Berhasil Di update');
    // }

    public function updatekeranjang(UpdateKeranjangRequest $request){
        // J_dokumen::with('dokumens')->findOrFail($id)
        $data = Keranjang::all();

        // $data->update([
        //     'layanan' => $request->layanan,
        //     'kota' => $request->kota,
        //     'kurir' => $request->kurir,
        //     'ongkir' => $request->ongkir,
        // ]);

        // $request->validate([
        //     'layanan' => 'required',
        //     'kota' => 'required',
        //     'kurir' => 'required',
        //     'ongkir' => 'required',
        // ]);
        // $data = Keranjang::with('user')->update($request->except('_token'));

        return view('invoice', compact('data'))->with('toast_success', 'Data Berhasil Di Update');
    }

    public function editpesanan($id) {
        $data = Keranjang::find($id);
        return view('editpesanan', compact('data'));
    }
}
