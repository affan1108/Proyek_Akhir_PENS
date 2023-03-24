<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Warna;
use App\Http\Requests\Keranjang\UpdateKeranjangRequest;
use RealRashid\SweetAlert\Facades\Alert;


class KeranjangController extends Controller
{
    public function keranjang(Request $request) {
        $data = $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'warna_id' => 'required',
            // 'ukuran' => 'required',
            // 'jumlah' => 'required',
            // 'harga' => 'required',
            'hitung' => 'required',
        ]);
        $data = new Keranjang;
        $data->user_id = $request->user_id;
        $data->produk_id = $request->produk_id;
        $data->warna_id = $request->warna_id;
        // $data->ukuran = $request->ukuran;
        $data->jumlah = $request->jumlah;
        // $data->harga = $request->harga;
        $data->hitung = $request->hitung;

        $qty = Warna::where('id', $request->warna_id)->sum('stok');
        if( $request->jumlah >= $qty){
            return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok');
            // $data['jumlah']=$request->jumlah;
            // $data['warna_id']=$request->warna_id;
            // dd($request);    
        }
        $data->save();
            return redirect('home');

        // if( $request->jumlah <= $qty){
        //     $data['jumlah']=$request->jumlah;
        //     $data['warna_id']=$request->warna_id;
        //     dd($request);
        //     $data->save();
        //     return redirect()->route('home');
            
        // } 
        // return redirect()->route('dashboard');

         
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
