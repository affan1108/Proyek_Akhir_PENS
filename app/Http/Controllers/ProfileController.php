<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\Http\Controllers\Redirect;
Use Alert;

class ProfileController extends Controller
{
    
    public function updateprofile(UpdateProfileRequest $request){
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
}
