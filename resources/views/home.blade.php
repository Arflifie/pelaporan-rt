@extends('layouts.layout')
@section('content')
<!-- Wrapper -->
  <div class="min-h-screen flex flex-col items-center">

    <!-- HEADER -->
    <header class="w-full bg-yellow-500 rounded-b-[60px] text-white py-12 px-6 relative shadow-md">
      <div class="max-w-4xl mx-auto flex flex-col items-center text-center">
        
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">{{Auth()->user()->name}}</h1>
        <p class="text-white/90 text-sm md:text-base lg:text-lg mt-2 leading-relaxed">
          SiagaRT siap bantu jaga<br>lingkungan RT 07!
        </p>
      </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-1 w-full max-w-4xl px-6 py-10 flex flex-col items-center">

      <!-- DARURAT SECTION -->
      <section class="text-center mb-12">
        <h2 class="text-red-700 text-2xl md:text-3xl lg:text-4xl font-extrabold">Darurat? Tekan di Sini!</h2>
        <p class="text-gray-600 mt-2 text-sm md:text-base lg:text-lg leading-relaxed">
          Segera tekan tombol di bawah untuk melaporkan keadaan darurat!
        </p>

        <div class="mt-8 relative flex justify-center items-center">
          <div class="absolute w-80 h-80 bg-red-700/5 rounded-full hidden md:block"></div>
          <div class="absolute w-64 h-64 bg-red-700/10 rounded-full hidden md:block"></div>
          <div class="relative w-40 h-40 md:w-56 md:h-56 lg:w-64 lg:h-64 bg-red-700 rounded-full flex items-center justify-center text-white text-3xl md:text-5xl lg:text-6xl font-bold shadow-xl hover:scale-105 transition-transform cursor-pointer">
            SOS
          </div>
        </div>
      </section>

      <!-- KONTAK DARURAT -->
      <section class="w-full px-2 mb-12">
        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-2">Kontak Darurat</h3>
        <p class="text-gray-500 text-sm md:text-base mb-4">Daftar Kontak Darurat</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <!-- Polisi -->
          <div class="bg-white shadow rounded-2xl p-5 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-amber-400 w-12 h-12 rounded-xl mb-3 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 2.28-1.64 4.44-4 4.9V19h8v-3.1c-2.36-.46-4-2.62-4-4.9zM12 3c1.11 0 2 .89 2 2s-.89 2-2 2-2-.89-2-2 .89-2 2-2z"/>
              </svg>
            </div>
            <p class="text-base md:text-lg font-bold text-gray-800">Polisi</p>
            <p class="text-sm md:text-base font-semibold text-red-700/80">No: 101</p>
          </div>

          <!-- Damkar -->
          <div class="bg-white shadow rounded-2xl p-5 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-amber-400 w-12 h-12 rounded-xl mb-3 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2c0 6-4 8-4 12 0 2.21 1.79 4 4 4s4-1.79 4-4c0-4-4-6-4-12z"/>
              </svg>
            </div>
            <p class="text-base md:text-lg font-bold text-gray-800">Damkar</p>
            <p class="text-sm md:text-base font-semibold text-red-700/80">No: 113</p>
          </div>

          <!-- Ambulans -->
          <div class="bg-white shadow rounded-2xl p-5 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-amber-400 w-12 h-12 rounded-xl mb-3 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6M21 12v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h1V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v4h1a2 2 0 0 1 2 2z"/>
              </svg>
            </div>
            <p class="text-base md:text-lg font-bold text-gray-800">Ambulans</p>
            <p class="text-sm md:text-base font-semibold text-red-700/80">No: 118</p>
          </div>

          <!-- Petugas RT -->
          <div class="bg-white shadow rounded-2xl p-5 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-amber-400 w-12 h-12 rounded-xl mb-3 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4 4 0 0 1 9 16h6a4 4 0 0 1 3.879 1.804M15 11a3 3 0 1 0-6 0 3 3 0 0 0 6 0z"/>
              </svg>
            </div>
            <p class="text-base md:text-lg font-bold text-gray-800">Petugas RT</p>
            <p class="text-sm md:text-base font-semibold text-red-700/80">No: +62XXXXXX</p>
          </div>
        </div>
      </section>

      <!-- HISTORI LAPORAN -->
      <section class="w-full mb-16 px-2">
        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-2">Histori Laporan</h3>
        <p class="text-gray-500 text-sm md:text-base mb-4">Riwayat Laporan Terakhir</p>

        <div class="space-y-4">
          <div class="bg-white shadow rounded-2xl p-5 flex justify-between items-center hover:shadow-lg transition">
            <div>
              <p class="text-base md:text-lg font-bold text-gray-800">Kebakaran</p>
              <p class="text-sm md:text-base font-semibold text-amber-400">Tanggal: 12 Okt 2025</p>
            </div>
            <span class="bg-yellow-400 text-white text-[12px] md:text-sm font-semibold rounded-full px-4 py-1">Proses</span>
          </div>

          <div class="bg-white shadow rounded-2xl p-5 flex justify-between items-center hover:shadow-lg transition">
            <div>
              <p class="text-base md:text-lg font-bold text-gray-800">Pencurian</p>
              <p class="text-sm md:text-base font-semibold text-amber-400">Tanggal: 10 Okt 2025</p>
            </div>
            <span class="bg-green-500 text-white text-[12px] md:text-sm font-semibold rounded-full px-4 py-1">Selesai</span>
          </div>
        </div>

        <div class="text-center mt-4">
          <button class="text-neutral-600 text-sm md:text-base font-bold underline hover:text-amber-500 transition">
            Lihat Selengkapnya >
          </button>
        </div>
      </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-amber-400 w-full py-4 text-center font-bold text-zinc-800 text-base md:text-lg lg:text-xl">
      © 2025 SiagaRT
    </footer>
  </div>
@endsection
/
