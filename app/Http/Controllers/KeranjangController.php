<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Warna;
use App\Models\Ongkir;
use App\Http\Requests\Keranjang\UpdateKeranjangRequest;
use RealRashid\SweetAlert\Facades\Alert;


class KeranjangController extends Controller
{
    public function keranjang(Request $request) {
        // $data = $request->validate([
        //     'user_id' => 'required',
        //     'produk_id' => 'required',
        //     'warna_id' => 'required',
        //     'hitung' => 'required',
        // ]);
        // $data = new Keranjang;
        // $data->user_id = $request->user_id;
        // $data->produk_id = $request->produk_id;
        // $data->warna_id = $request->warna_id;
        // $data->jumlah = $request->jumlah;
        // $data->hitung = $request->hitung;

        // $qty = Warna::where('id', $request->warna_id)->sum('stok');
        // if( $request->jumlah > $qty){
        //     return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok');  
        // }
        // $data->save();
        //     return redirect('home');

        $data = $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'warna_id' => 'required',
            'hitung' => 'required',
        ]);
        $data = new Keranjang;
        $data->user_id = $request->user_id;
        $data->produk_id = $request->produk_id;
        $data->warna_id = $request->warna_id;
        $data->jumlah = $request->jumlah;
        $data->hitung = $request->hitung;

        $cpty = Warna::where('id', $request->warna_id)->sum('stok');
        // $color = [
        //     'id' => $request->warna_id,
        //     'stok' => round($cpty - ($request->jumlah), PHP_ROUND_HALF_UP),
        // ];
        // $color->stok .= round($cpty - ($request->jumlah), PHP_ROUND_HALF_UP);

        
        // $qty = Warna::where('id', $request->warna_id)->sum('stok');
        if( $request->jumlah > $cpty){
            return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok');  
        } else {
            $data->save();
            // Warna::where('id', $request->warna_id)->update($color);
            return redirect('home');
        }
        

         
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

    public function updatekeranjang(Request $request, $id){
        $data = Keranjang::findOrFail($id);
        $ongkir = Ongkir::all()->last();
        $data->update();

        return view('invoice', compact('data','ongkir'))->with('toast_success', 'Data Berhasil Di Update');
    }

    public function editpesanan($id) {
        $data = Keranjang::find($id);
        return view('editpesanan', compact('data'));
    }
}
