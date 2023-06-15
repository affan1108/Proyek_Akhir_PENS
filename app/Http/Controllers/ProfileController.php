<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\Http\Controllers\Redirect;
use App\Models\Ongkir;
use App\Models\Keranjang;
Use Alert;

class ProfileController extends Controller
{
    
    public function updateprofile(UpdateProfileRequest $request){
        $previousUrl = $request->input('previous_url');
        $ongkir = Ongkir::all()->last();
        $rows = Keranjang::all();
        // dd($previousUrl);
        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'nomer' => $request->nomer,
            'lainnya' => $request->lainnya,
        ]);

        if ($previousUrl === 'http://127.0.0.1:8000/invoicecart' || $previousUrl === 'http://127.0.0.1:8000/updateprofile') {
            return view('invoicecart', compact('ongkir','rows'))->with('toast_success', 'Data Berhasil Di Update');
        } else {
            return redirect()->back()->with('toast_success', 'Data Berhasil Di Update');
        }
    }

    public function updateprofil(UpdateProfileRequest $request){
        dd($request->url());
        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'nomer' => $request->nomer,
            'lainnya' => $request->lainnya,
        ]);

        return view('profile')->with('toast_success', 'Data Berhasil Di Update');
    }

    public function profile() {
        return view('profile');
    }

    public function profil() {
        return view('profil');
    }
}
