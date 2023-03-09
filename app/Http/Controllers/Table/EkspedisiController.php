<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekspedisi;

class EkspedisiController extends Controller
{
    public function insertekspedisi(Request $request){
        $data = $request->all();
        Ekspedisi::create($data);
        return redirect()->route('tables.ekspedisi');
    }

    public function deleteekspedisi($id){
        $data = Ekspedisi::find($id);
        $data->delete();
        return redirect()->route('tables.ekspedisi');
    }
}
