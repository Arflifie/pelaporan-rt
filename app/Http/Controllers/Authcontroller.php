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
            'email.max' => 'email terlalu panjang, maksimal 40 karakter',


            'password.required' => 'harap masukkan password',
            'password.max' => 'password terlalu panjang, maksimal 20 karakter',
        ]);
        if(Auth::attempt($request->only('email', 'password'), $request->has('remember'))){
            return redirect('/home');
        }
        return back()->with('failed', 'Email dan password salah');
    }

    public function register(Request $request){
        $request->validate([
            'namalengkap' => 'required|string|max: 225',
            'nomor-telepon' => 'required|numeric|max: 14',
            'email' => 'required|email|max: 40',
            'password' => 'required|confirmed|max: 20',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
        ]);
        Auth::login($user);

        return redirect()->route('login');
    }
    public function messages(){
        return [
            'password.confirmed' => 'Konfirmasi Password tidak cocok',
        ];
    }
}
