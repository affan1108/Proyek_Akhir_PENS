<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update($id, UserFormRequest $request)
    {
        $user = User::findOrFail($id);

        $user->name = $request->get('name');

        $user->email = $request->get('email');

        $user->save();

        return \Redirect::route('users.edit', [$user->id])->with('message', 'User has been updated!');
    }

    public function user(){
        $data = User::all();
        return view('tables.user', compact('data'));
    }

    public function deleteuser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('tables.user');
    }
}
