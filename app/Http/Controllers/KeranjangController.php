<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Warna;
use App\Models\Ongkir;
use App\Http\Requests\Keranjang\UpdateKeranjangRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use DB;
use Auth;

class KeranjangController extends Controller
{
    public function index(){
        $data = Keranjang::where('payment', null)->orderBy('created_at', 'DESC')->get();
        return view('keranjang', compact('data'));
    }

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
        $data->keranjang = $request->keranjang;

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
            return redirect()->back()->with('toast_success', 'Berhasil Menambahkan Ke Keranjang');;
        }
    }

    public function cart(Request $request){
        $data = $request->all();
        
        $cpty = Warna::where('id', $request->warna_id)->sum('stok');
        if( $request->jumlah > $cpty){
            return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok');  
        } else {
            Warna::create($data);
            Session::flash('status', 'Berhasil Menambahkan Ke Keranjang');
            return redirect()->back();
        }
    }

    public function update(Request $request){
        // dd($request);
        // $cpty = Keranjang::where('id', $request->warna_id)->sum('stok');

        if($request->checkbox != null){
            foreach($request->checkbox as $key=>$name) {
                $insert = [
                    // 'produk_id' => $request->checkbox[$key],
                    'keranjang' => 1,
                ];

                DB::table('keranjangs')->where('id', $request->checkbox[$key])->update($insert);
            }
            return redirect('ongkir');
        }
        else
            return redirect()->back()->with('toast_info', 'Pilih Produk Terlebih Dahulu');  
    }

    public function deleteAndUpdate(Request $request, $id){
        // dd($request);
        $data = Keranjang::find($id);
        $data->keranjang = 0;
        $data->update();
        // Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function updatekeranjang(Request $request, $id){
        $data = Keranjang::findOrFail($id);
        // $ongkir = Ongkir::all()->last();
        $data->warna_id = $request->warna_id;
        $data->jumlah = $request->jumlah;
        
        $cpty = Warna::where('id', $request->warna_id)->sum('stok');
        if( $request->jumlah > $cpty){
            return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok');  
        } else {
            $data->update();
            return redirect('keranjang');
        }
        // return view('invoice', compact('data','ongkir'))->with('toast_success', 'Data Berhasil Di Update');
        
    }

    public function editpesanan($id) {
        $data = Keranjang::find($id);
        return view('editpesanan', compact('data'));
    }

    public function deletecart($id){
        $data = Keranjang::find($id);
        $data->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
