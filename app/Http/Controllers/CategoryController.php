<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hijab;

class CategoryController extends Controller
{
    public function hijab() {
        $data = Hijab::all();
        return view("hijab", compact('data'));
    }
}
