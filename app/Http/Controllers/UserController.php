<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function update($id, UserFormRequest $request)
    {
        $user = User::findOrFail($id);

        $user->name = $request->get('name');

        $user->email = $request->get('email');

        $user->save();

        Session::flash('status', 'Data Berhasil Di update');
        return \Redirect::route('users.edit', [$user->id])->with('message', 'User has been updated!');
    }

    public function user(){
        $data = User::all();
        return view('tables.user', compact('data'));
    }

    public function deleteuser($id){
        $data = User::with("invoice")->find($id);
        if($data->invoice()->count() > 0){
            return back()->with('error', 'Jenis dokumen ini memiliki data di tabel lain.');
        }
        $data->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect('tables.user');
    }
}
