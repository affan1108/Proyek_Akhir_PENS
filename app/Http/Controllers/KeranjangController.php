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
        $data = Keranjang::where('payment', null)->get();
        return view('keranjang', compact('data'));
    }

    public function keranjang(Request $request) {
        // dd($request);
        // dd(collect(json_decode($request->produk_id)));
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
  
        $cek = Keranjang::where('invoice_id', null)->where('produk_id', $request->produk_id)->where('user_id', Auth::user()->id)->pluck('warna_id');
        // $x = explode(',', $cek);
        // dd($cek);
        if($request->warna_id == null){
            return back()->with('toast_info', 'Pilih Warna dan Ukuran Terlebih Dahulu');
        }
        else{
            if(collect(json_decode($request->warna_id)) == $cek){
                return redirect()->back()->with('toast_info', 'Produk yang anda pilih telah ada di Keranjang')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');;
            }
            else{
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
            $cart = Keranjang::where('invoice_id', null)->where('produk_id',$request->produk_id)->pluck('warna_id');
            // dd($cart);
            // dd($data->produk_id);
            // dd(array($request->warna_id));
            
                if( $request->jumlah > $cpty){
                    return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0'); 
                } else {
                    $data->save();
                    // Warna::where('id', $request->warna_id)->update($color);
                    return redirect()->back()->with('toast_success', 'Berhasil Menambahkan Ke Keranjang');;
                }
            }
        }
    }

    public function cart(Request $request){
        $data = $request->all();
        
        $cpty = Warna::where('id', $request->warna_id)->sum('stok');
        if( $request->jumlah > $cpty){
            return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');;  
        } else {
            Warna::create($data);
            Session::flash('status', 'Berhasil Menambahkan Ke Keranjang');
            return redirect()->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        }
    }

    public function update(Request $request){
        // dd($request);
        // $check = $request->input('checkbox');
        // $selectedProducts = $request->input('jumlah');
        // $selectedProduct = $request->input('warna_id');
        // dd($check, $selectedProducts, $selectedProduct);
        // $data = Keranjang::whereIn('id', $request->checkbox)->pluck('jumlah');
        // $warnaElement = collect($request->jumlah)->intersect($data)->all();
        // $commonElement = array_intersect_key($request->jumlah, $data);
        // $commonElements = array_intersect_key($request->checkbox, $request->jumlah);
        // dd($request->jumlah, $commonElement, $commonElements, $request->warna_id);

        
        // dd($request->checkbox, $request->jumlah, $data, $warnaElement, $commonElement, $commonElements);
        
        if($request->checkbox == null){
            return redirect()->route('keranjang')->with('toast_info', 'Pilih Produk Terlebih Dahulu')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        }
        else{
            // $commonElements = array_intersect_key($request->checkbox, $request->jumlah);
            // $commonElement = array_intersect_key($request->jumlah, $request->checkbox);
            // $warnaElement = array_intersect_key($request->warna_id, $request->checkbox);
            $checked = $request->input('checkbox');
            $quantity = $request->input('jumlah');
            // dd($checked, $quantity);
            foreach($checked as $products){
                $product = Keranjang::find($products);
                // dd($product);

                // $product->warna_id = $request->warna_id;
                $product->jumlah = $quantity[$products];
                $product->update();
                
            }
            // foreach($commonElements as $key=>$name){
            //     foreach($commonElement as $key=>$name){
            //         $product = Product::find($productId);
            //         $insert = [
            //             'jumlah' => $request->jumlah[$key],
            //         ];
            //         // dd($insert);
            //         DB::table('keranjangs')->where('id', $commonElements[$key])->update($insert);
            //     }
            // }
            
            
            $qty = Keranjang::whereIn('id', $request->checkbox)->sum('jumlah');
            if($qty >= 5){
                foreach($request->checkbox as $key=>$name) {
                    $insert = [
                        // 'produk_id' => $request->checkbox[$key],
                        'keranjang' => 1,
                    ];

                    DB::table('keranjangs')->where('id', $request->checkbox[$key])->update($insert);
                }
                

                $checked = $request->input('checkbox');
                $colors = $request->input('warna_id');
                // dd($checked, $colors);
                foreach($checked as $color){
                    $colour = Keranjang::find($color);
                    // dd($product);

                    // $product->warna_id = $request->warna_id;
                    $colour->warna_id = $colors[$color];
                    $colour->update();
                    
                }
                // foreach($request->warna_id as $key=>$name){
                //     foreach($request->checkbox as $key=>$value){
                //         $insert = [
                //             'warna_id' => $request->warna_id[$key],
                //         ];
                //         // dd($insert);
                //         DB::table('keranjangs')->where('id', $request->checkbox[$key])->update($insert);
                //     }
                // }
                $quantities = $request->input('jumlah');
                // dd($quantities);
                $proID = Keranjang::whereIn('id', $request->checkbox)->pluck('produk_id');
                // dd($proID,$quantities);
                $cart = Keranjang::whereIn('id', $request->checkbox)->whereIn('produk_id', $proID)->pluck('warna_id');
                // dd($cart);
                $cpty = Warna::whereIn('id', $cart)->pluck('stok');
                // dd($cpty);
                $sum = Keranjang::whereIn('id', $request->checkbox)->pluck('jumlah');
                // dd($cpty,$sum);
                if( $sum > $cpty){
                    return back()->with('toast_info', 'Jumlah Melebihi Ketersedian Stok')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');;  
                }
                else {
                    return redirect()->route('ongkir');
                }
                
            }
            else{
                return redirect()->route('keranjang')->with('toast_info', 'Minimal Pembelian 5 Produk');  
            }
        
        }
            
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
