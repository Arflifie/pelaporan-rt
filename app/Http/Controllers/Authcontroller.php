<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function login(Request $request){
        $request ->validate([
            'email' => 'required | email | max: 40',
            'password' => 'required | max: 20',
        ]);
        if(Auth::attempt($request->only('email', 'password'), $request->remember)){
            return redirect('/dashboard');
        }
        return back() ->with('failed', 'Email dan password salah');
    }
}
