<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function insertvoucher(Request $request){
        $data = $request->all();
        Voucher::create($data);
        return redirect()->route('invoice');
    }
}
