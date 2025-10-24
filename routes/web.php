<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', fn () => view('auth.login'))->name('login');

// middleware
// Route::middleware('web')->group(function(){
   
//     Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// });
