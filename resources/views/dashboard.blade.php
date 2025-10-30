<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SiagaRT - Keamanan Lingkungan Bersama')</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-stone-50 text-gray-800 font-sans min-h-screen flex flex-col">

  <!-- HEADER -->
  <header class="bg-amber-400 text-white py-5 px-6 md:px-20 rounded-b-[40px] shadow-md relative">
    <div class="max-w-7xl mx-auto flex justify-between items-center">

      <!-- Logo -->
      <div class="flex items-center gap-2">
        <span class="text-2xl font-extrabold tracking-wide text-red-700">SiagaRT</span>
      </div>

      <!-- Menu Navigasi -->
      <nav class="hidden md:flex items-center gap-8 text-base font-semibold">
        <a href="#" class="hover:text-black/80 transition">Tentang</a>
        <a href="#" class="hover:text-black/80 transition">Fitur</a>
        <a href="#" class="hover:text-black/80 transition">Learn More</a>
        <a href="{{ route('login') }}" class="text-white hover:text-black/80 transition">Login</a>
        <a href="{{ route('register') }}" class="bg-white text-amber-500 px-4 py-2 rounded-full font-bold hover:bg-amber-100 transition">Sign Up</a>
      </nav>

      <!-- Tombol menu (mobile) -->
      <div class="md:hidden flex flex-col gap-1 cursor-pointer">
        <span class="block w-8 h-[3px] bg-white rounded"></span>
        <span class="block w-6 h-[3px] bg-white rounded"></span>
        <span class="block w-8 h-[3px] bg-white rounded"></span>
      </div>
    </div>
  </header>

  <!-- KONTEN UTAMA -->
  <main class="flex-1 py-14 px-6 md:px-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">

      <!-- Bagian kiri: teks -->
      <div class="space-y-5">
        <h2 class="text-3xl md:text-4xl font-bold leading-snug">
          Keamanan lingkungan adalah tanggung jawab bersama
        </h2>
        <p class="text-gray-600 leading-relaxed">
          Dengan satu klik, Anda dapat melaporkan kebakaran, pencurian, atau kejadian mencurigakan, 
          dan membantu menciptakan lingkungan yang lebih aman dan tangguh.
        </p>
        <a href="{{ route('register') }}" 
           class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
          Get Started Now
        </a>
      </div>

      <!-- Bagian kanan: ilustrasi -->
      <div class="flex justify-center">
        <div class="w-72 h-60 bg-gray-200 rounded-xl flex items-center justify-center shadow-inner">
          <span class="text-gray-400">[Gambar Ilustrasi]</span>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-amber-400 text-center py-4 text-zinc-800 font-semibold text-base rounded-t-[40px] shadow-inner">
    © {{ date('Y') }} SiagaRT 
  </footer>

</body>
</html>
