<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ukuran;

class UkuranController extends Controller
{
    public function insertukuran(Request $request){
        $data = $request->all();
        Ukuran::create($data);
        return redirect()->route('tables.ukuran');
    }

    public function deleteukuran($id){
        $data = Ukuran::find($id);
        $data->delete();
        return redirect()->route('tables.ukuran');
    }
}
