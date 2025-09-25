<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/auth.login', function () {
    return view('login');
});

Route::get('/auth.register', function () {
    return view('register');
});

?>