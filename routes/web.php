<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', fn () => view('auth.login'))->name('login');