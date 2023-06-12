<?php

namespace App\Http\Controllers\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warna;
use Session;

class WarnaController extends Controller
{
    public function insertwarna(Request $request){
        $data = $request->all();
        if($request->hasFile('foto')){
            // $imageName = $data['foto'].'-foto-'.time().rand(1,1000).'.'.$foto->extension();
            // $foto->move(public_path('assets'),$imageName);
            $data['foto']=$request->file('foto')->getClientOriginalName();
            // $request->file('foto')->move('assets/', $request->file('foto')->getClientOriginalName());
            // $data->foto = $request->file('foto')->getClientOriginalName();
            // $data->save();
        }
        
        Warna::create($data);
        Session::flash('status', 'Data Berhasil Ditambahkan');
        return redirect()->route('tables.warna');
    }

    public function deletewarna($id){
        $data = Warna::with("hijab")->find($id);
        if($data->hijab()->count() > 0){
            return back()->with('error', 'Jenis dokumen ini memiliki data di tabel lain.');
        }
        $data->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('tables.warna');
    }

    public function updatewarna(Request $request, $id){
        $data = Warna::findOrFail($id);
        $data->hijab_id = $request->hijab_id;
        $data->warna = $request->warna;
        $data->stok = $request->stok;
        $data->ukuran = $request->ukuran;
        $data->update();
        Session::flash('status', 'Data Berhasil Di update');
        // dd($data);
        return redirect()->back();
    }
}
