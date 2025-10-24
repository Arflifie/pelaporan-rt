@extends('layouts.layoutauth')
@section('content')
    <form action="" class="py-06">
        <h2 class="text-white text-center">Form Login</h2>
        <div class="text-center">
            <label for="name" class="">Username</label><br>
            <input class="py-1 px-10"
            type="text" id="name" placeholder="masukkan username" required>
        </div>
        <div class="text-center">
            <label for="password">Password</label> <br>
            <input class="py-1 px-10"
            type="password" id="password" placeholder="masukkan password" required>
        </div> <br>
        <div type="submit" class="text-center rounded-lg px-2 bg-blue-400 py-1 text-white hover:bg-blue-500 transition-colors">
            Login
        </div>
        </div>
        
    </form>
@endsection