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
        ],[
            'email.required' => 'harap masukkan password',
            'email.email' => 'email tidak valid',
            'email.max' => 'email terlalu panjang, maksimal 20 karakter',


            'password.required' => 'harap masukkan password',
            'password.max' => 'password terlalu panjang, maksimal 20 karakter',
        ]);
        if(Auth::attempt($request->only('email', 'password'), $request->has('remember'))){
            return redirect('/home');
        }
        return back()->with('failed', 'Email dan password salah');
    }
}
