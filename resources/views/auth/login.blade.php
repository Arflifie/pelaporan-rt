@extends('layouts.layoutauth')
@section('content')
<div class="absolute z-0 p-60 sm:p-30 bg-blue-950 -ml-35 sm:-ml-50 -mt-20 rounded-full">
        {{-- dekorasi1 --}}
    </div>
<div class="z-20 flex justify-center">
    <form action="" class=" z-20 mt-30">
        <h1 class="text-white text-center">SiagaRT</h1>
        <h2 class="text-white text-center">Form Login</h2>
        <div class="">
            <label for="name" class="ml-2 text-xl text-white">Username</label><br>
            <div class="">
                <input class="py-2.5 w-110 sm:w-5 px-3 bg-white rounded-lg"
                type="text" id="name" placeholder="masukkan username" required>
            </div>
        </div><br>
        <div class="">
            <label for="password" class="ml-2 text-xl text-white">Password</label> <br>
            <div class="">
                <input class=" py-2.5 w-110 px-3 bg-white rounded-lg focus:ring-2 focus:outline-none"
                type="password" id="password" placeholder="masukkan password" required>
            </div>
            
        </div> <br>
        <div class="flex justify-center">
            <div 
                type="submit" class=" w-50 mt-25 text-center rounded-2xl bg-green-400 py-3 text-white hover:bg-green-700 transition-colors">
                Login
            </div>
        </div>
    </form>
</div>
    <div class="absolute z-10 p-60 bg-orange-100 -mt-50 ml-60 rounded-full">    
        {{-- dekorasi2 --}}
    </div>

    
@endsection