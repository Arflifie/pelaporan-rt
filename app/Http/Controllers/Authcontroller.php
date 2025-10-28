<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login(Request $request){
        $request ->validate([
            'email' => 'required|email|max: 40',
            'password' => 'required|max: 20',
        ]);
        if(Auth::attempt($request->only('email', 'password'), $request->has('remember'))){
            return redirect('/home');
        }
        return back()->with('failed', 'Email dan password salah');
    }
}
