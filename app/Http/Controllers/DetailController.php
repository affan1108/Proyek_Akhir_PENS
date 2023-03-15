<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hijab;
use App\Models\Courier;
use App\Models\Province;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function hijab($id) {
        $data = Hijab::find($id);
        $couriers   = Courier::pluck('title', 'code');
        $provinces  = Province::pluck('title', 'province_id');
        return view("detailhijab", compact('data','couriers', 'provinces'));
    }

    public function view($id) {
        $data = Hijab::find($id);
        return view('view', compact('data'));
    }

    public function insert(Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
            // 'ukuran' => 'required',
            // 'warna' => 'required',
        ]);
        $data = new Hijab;
        // $awal = $data->foto;
        $data->nama = $request->nama;
        // $data->warna = json_encode($request->warna);
        // $data->ukuran = json_encode($request->ukuran);
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        
        
        if($request->hasFile('foto')){
            // $imageName = $data['foto'].'-foto-'.time().rand(1,1000).'.'.$foto->extension();
            // $foto->move(public_path('assets'),$imageName);
            $data['foto']=$request->file('foto')->getClientOriginalName();
            // $request->file('foto')->move('assets/', $request->file('foto')->getClientOriginalName());
            // $data->foto = $request->file('foto')->getClientOriginalName();
            // $data->save();
        }
        $data->save();
        return redirect()->route('dashboard');
        // $data->update();
        // return redirect()->route('daftarproduk')->with('toast_success', 'Data Berhasil Di update');
        // $data = $request->all();
        // $warna = $data['warna'];
        // $data['warna'] = implode(', ',$warna);
        // $ukuran = $data['ukuran'];
        // $data['ukuran'] = implode(', ',$ukuran);
        // if($request->hasFile('foto')){
        //     // $imageName = $data['foto'].'-foto-'.time().rand(1,1000).'.'.$foto->extension();
        //     // $foto->move(public_path('assets'),$imageName);
        //     $data['foto']=$request->file('foto')->getClientOriginalName();
        //     // $request->file('foto')->move('assets/', $request->file('foto')->getClientOriginalName());
        //     // $data->foto = $request->file('foto')->getClientOriginalName();
        //     // $data->save();
        // }
        // Hijab::create($data);
        // return redirect()->route('dashboard');
        // $imageName = $data['nama'].'-image-'.time().rand(1,1000).'.'.$image->extension();
        //         $image->move(public_path('assets'),$imageName);
        // dd($request->all());
        // $data = $request->validate([
        //     'nama' => 'required',
        //     'harga' => 'required',
        //     'deskripsi' => 'required',
        // ]);
        // if($request->hasFile('foto')){
        //         $data['foto']=$request->file('foto')->getClientOriginalName();
        //         // $request->file('foto')->move('assets/', $request->file('foto')->getClientOriginalName());
        //         // $data->foto = $request->file('foto')->getClientOriginalName();
        //         // $data->save();
        //     } 
    }

    // public function insert(Request $request){
    //     $post = Hijab::create([
    //         'nama' => 'Judul Post',
    //         'harga' => 'Konten Post',
    //         'deskripsi' => 'Konten Post',
    //     ]);
        
    //     $post->warna()->createMany([    
    //         [        'nama' => 'Penulis 1'],
    //         [        'author' => 'Penulis 2'],
    //     ]);
    // }

    public function update(Request $request, $id){
        $data = Hijab::findOrFail($id);
        $awal = $data->foto;
            $data->nama = $request->nama;
            $data->warna = $request->warna;
            // $data->ukuran = $request->ukuran;
            $data->harga = $request->harga;
            $data->deskripsi = $request->deskripsi;
        
        
        $request->foto->move(public_path().'/assets', $awal);
        $data->update();
        return redirect()->route('daftarproduk')->with('toast_success', 'Data Berhasil Di update');
    }

    public function delete($id){
        $data = Hijab::find($id);
        $data->delete();
        return redirect()->route('daftarproduk');
    }

    // public function get_user(Request $request)
    // {
    //     $input = $request->input('kirim');
    //     $cr = [];
    //     $arlogin = array(0=>Auth::user()->id);
        
    //     $data =[];
        
    //         $cr = array(0=>$input);
    //         $warna =  Hijab::where('warna',$cr)->whereNotIn('id',$arlogin)->get();
    //         foreach($warna as $us){
    //             $push["id"] = $us->id;
    //             $push["detail"] = $us->nama;
    //             array_push($data,$push);
            
    //         }
        
    //     echo json_encode($data);
    // }
}
