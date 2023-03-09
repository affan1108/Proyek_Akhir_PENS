<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hijab;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Models\Ekspedisi;
use App\Models\Keranjang;
use App\Models\Ongkir;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Riwayat;

class MenuController extends Controller
{
    public function home() {
        $data = Hijab::all();
        $carts = Keranjang::all();
        return view('home', compact('data', 'carts'));
        // return view("pesanansaya", compact('data'));
    }

    public function pesanansaya() {
        $data = Payment::all();
        return view("pesanansaya", compact('data'));
    }

    public function viewpesanan($id)
    {
        $data = Payment::find($id);
        return view('viewpesanan',compact('data'));
    }
    
    public function pesananditerima(Request $request, $id)
    {
        $data = Payment::findOrFail($id);
        $data->diterima = $request->diterima;
        
        $data->update();
        return redirect()->route('penilaianpesanan')->with('toast_success', 'Data Berhasil Di update');
    }

    public function riwayatpesanan() {
        $data = Payment::all();
        // return view("pesanansaya", compact('data'));
        return view("riwayatpesanan", compact('data'));
    }

    public function penilaianpesanan() {
        $data = Payment::all();
        return view("penilaianpesanan", compact('data'));
    }

    public function daftarproduk() {
        $data = Hijab::all();
        return view("daftarproduk", compact('data'));
    }

    public function daftarpesanan() {
        $data = Payment::all();
        return view("daftarpesanan", compact('data'));
    }

    public function daftarpenilaian() {
        $data = Payment::all();
        return view("daftarpenilaian", compact('data'));
    }

    public function addproduk() {
        return view("addproduk");
    }

    public function edit($id) {
        $data = Hijab::find($id);
        return view('editproduk', compact('data'));
    }

    public function warna() {
        $data = Warna::all();
        $ukur = Ukuran::all();
        return view('tables.warna', compact('data','ukur'));
    }

    public function ukuran() {
        $data = Ukuran::all();
        return view('tables.ukuran', compact('data'));
    }

    public function ekspedisi() {
        $data = Ekspedisi::all();
        return view('tables.ekspedisi', compact('data'));
    }

    public function bill() {
        $rows = Invoice::all()->last();
        return view('bill', compact('rows'));
    }

    public function view($id)
    {
        $data = Keranjang::findOrFail($id);

        return view('invoice',compact('data'));
    }
}
