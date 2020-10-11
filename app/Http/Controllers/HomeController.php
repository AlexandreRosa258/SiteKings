<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function profile($id){
        $user = User::find($id);
        return view('auth.profile',compact('user'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect('dashboard');
    }
}
