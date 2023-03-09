<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warna;

class WarnaController extends Controller
{
    public function insertwarna(Request $request){
        $data = $request->all();
        Warna::create($data);
        return redirect()->route('tables.warna');
    }

    public function deletewarna($id){
        $data = Warna::find($id);
        $data->delete();
        return redirect()->route('tables.warna');
    }
}
