<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [LoginController::class, 'show']) -> name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'show']) ->name('register');
Route::get('/register', [RegisterController::class, 'register']);