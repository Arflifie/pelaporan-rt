@extends('layouts.layout')

@section('content')
<div class="flex justify-center items-center bg-[#f5f0ea] p-6 md:p-10 min-h-[80vh]">
  <div class="bg-white rounded-2xl shadow-lg p-6 w-full max-w-md">
    <h1 class="text-xl font-bold text-[#b5382e] text-center mb-6">Formulir Laporan</h1>

    <form id="laporanForm" novalidate>
      <!-- Nama Lengkap -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
        <input type="text" required placeholder="Ketik nama lengkap Anda"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-300 focus:outline-none">
      </div>

      <!-- Lokasi Kejadian -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Lokasi Kejadian</label>
        <input type="text" required placeholder="Ketik lokasi kejadian"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-300 focus:outline-none">
      </div>

      <!-- Kategori Laporan -->
      <div class="mb-4 flex flex-col gap-1.5">
        <label class="block text-sm font-medium text-gray-700">Kategori Laporan</label>
        <div class="border border-gray-300 rounded-lg bg-white focus-within:ring-2 focus-within:ring-red-300 transition">
          <select id="kategori" required
            class="w-full rounded-md px-3 py-2 focus:outline-none text-gray-500
                   invalid:text-gray-500 valid:text-gray-900">
            <option value="" disabled selected>Pilih kategori laporan anda*</option>
            <option value="Kebakaran">Kebakaran</option>
            <option value="Bencana Alam">Bencana Alam</option>
            <option value="Pencurian">Pencurian</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <input type="text" id="kategoriLain" placeholder="Tulis kategori lainnya"
          class="hidden border border-gray-300 rounded-lg px-3 py-2 placeholder-gray-500 focus:ring-2 focus:ring-red-300 focus:outline-none">
      </div>

      <!-- Tanggal Kejadian -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kejadian</label>
        <input type="date" required
          class="w-full border border-gray-300 rounded-lg px-3 py-2 placeholder-gray-500 focus:ring-2 focus:ring-red-300 focus:outline-none">
      </div>

      <!-- Bukti Kejadian -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Bukti Kejadian</label>
        <div
          class="border border-gray-300 rounded-lg p-5 flex flex-col items-center justify-center text-center bg-white hover:border-yellow-400 transition">
          <label for="bukti"
            class="cursor-pointer inline-flex items-center justify-center gap-2 bg-yellow-500 text-white font-semibold px-5 py-2 rounded-2xl hover:bg-yellow-600 transition-all shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h2l1-2h12l1 2h2v11H3V7z" />
              <circle cx="12" cy="13" r="3" />
            </svg>
            <span>Pilih Foto</span>
          </label>
          <input type="file" id="bukti" required class="hidden">
          <p id="fileName" class="text-sm text-gray-500 mt-3 italic"></p>
        </div>
      </div>

      <!-- Deskripsi Singkat -->
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
        <textarea required placeholder="Tuliskan deskripsi kejadian..."
          class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 resize-none focus:ring-2 focus:ring-red-300 focus:outline-none"></textarea>
      </div>

      <!-- Tombol Kirim -->
      <div class="flex justify-center">
        <button type="submit"
          class="bg-blue-500 text-white font-semibold py-2 px-16 rounded-2xl hover:bg-blue-600 transition shadow-md">
          Kirim
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  const kategori = document.getElementById('kategori');
  const kategoriLain = document.getElementById('kategoriLain');
  const bukti = document.getElementById('bukti');
  const form = document.getElementById('laporanForm');

  form.addEventListener('submit', function(e) {
    e.preventDefault(); 

    const nama = form.querySelector('input[type="text"]:not(#kategoriLain)');
    const lokasi = form.querySelectorAll('input[type="text"]')[1]; 
    const tanggal = form.querySelector('input[type="date"]');
    const deskripsi = form.querySelector('textarea');

    if (!nama.value.trim()) {
      alert('Harap isi formulir laporan dengan lengkap!');
      nama.focus();
      return;
    }

    if (!lokasi.value.trim()) {
      alert('Harap isi formulir laporan dengan lengkap!');
      lokasi.focus();
      return;
    }

    if (!kategori.value) {
      alert('Harap isi formulir laporan dengan lengkap!');
      kategori.focus();
      return;
    }

    if (kategori.value === 'Lainnya' && !kategoriLain.value.trim()) {
      alert('Harap isi formulir laporan dengan lengkap!');
      kategoriLain.focus();
      return;
    }

    if (!tanggal.value) {
      alert('Harap isi formulir laporan dengan lengkap!');
      tanggal.focus();
      return;
    }

    if (!bukti.files.length) {
      alert('Harap isi formulir laporan dengan lengkap!');
      bukti.focus();
      return;
    }

    if (!deskripsi.value.trim()) {
      alert('Harap isi formulir laporan dengan lengkap!');
      deskripsi.focus();
      return;
    }

    form.submit();
  });

  kategori.addEventListener('change', function() {
    if (this.value === 'Lainnya') {
      kategoriLain.classList.remove('hidden');
      kategoriLain.setAttribute('required', true);
    } else {
      kategoriLain.classList.add('hidden');
      kategoriLain.removeAttribute('required');
      kategoriLain.value = '';
    }
  });

  const fileName = document.getElementById('fileName');
  bukti.addEventListener('change', function() {
    fileName.textContent = this.files.length ? `📸 ${this.files[0].name}` : '';
  });
</script>

@endsection
