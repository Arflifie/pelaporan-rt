@extends('layouts.layout')
@section('content')
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-house-door-fill"></i> Dashboard RT 01</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-4">
        <h1 class="h3 mb-4">Selamat Datang, Pengurus!</h1>

        <div class="row g-4">
            <div class="col-xl-3 col-md-6">
                <div class="card text-white bg-primary shadow">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">LAPORAN MASUK (BULAN INI)</div>
                            <div class="display-4">15</div>
                        </div>
                        <i class="bi bi-journal-text card-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white bg-danger shadow">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">BELUM DIPROSES</div>
                            <div class="display-4">3</div>
                        </div>
                        <i class="bi bi-exclamation-triangle-fill card-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white bg-warning shadow">
                    <div class="card-body d-flex justify-content-between align-items-center">
                         <div>
                            <div class="card-title">SEDANG DITANGANI</div>
                            <div class="display-4">5</div>
                        </div>
                        <i class="bi bi-hourglass-split card-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white bg-success shadow">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">LAPORAN SELESAI</div>
                            <div class="display-4">7</div>
                        </div>
                        <i class="bi bi-check-circle-fill card-icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                     <div class="card-header">
                        <h5 class="card-title mb-0"><i class="bi bi-rocket-takeoff-fill"></i> Akses Cepat</h5>
                    </div>
                    <div class="card-body">
                       <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Buat Laporan Baru</button>
                       <button class="btn btn-secondary"><i class="bi bi-megaphone-fill"></i> Buat Pengumuman</button>
                       <button class="btn btn-info text-white"><i class="bi bi-people-fill"></i> Kelola Data Warga</button>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="bi bi-list-ul"></i> Daftar Laporan Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Jenis Laporan</th>
                                        <th>Pelapor</th>
                                        <th>Lokasi</th>
                                        <th>Waktu</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Kemalingan</strong></td>
                                        <td>Budi - Blok A1</td>
                                        <td>Depan Rumah</td>
                                        <td>2 jam lalu</td>
                                        <td><span class="badge bg-danger">Baru</span></td>
                                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kematian</strong></td>
                                        <td>Siti - Blok C4</td>
                                        <td>-</td>
                                        <td>1 hari lalu</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kebakaran</strong></td>
                                        <td>Joko - Blok B2</td>
                                        <td>Dapur Rumah</td>
                                        <td>3 hari lalu</td>
                                        <td><span class="badge bg-warning text-dark">Ditangani</span></td>
                                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lain-lain (Keributan)</strong></td>
                                        <td>Ani - Blok A5</td>
                                        <td>Jalan Utama</td>
                                        <td>4 hari lalu</td>
                                        <td><span class="badge bg-warning text-dark">Ditangani</span></td>
                                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>

            <div class="col-lg-4">
                 <div class="card shadow mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="bi bi-bar-chart-line-fill"></i> Statistik Laporan</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Laporan per Kategori</strong></p>
                        <img src="https://i.imgur.com/gY3Of8Q.png" class="img-fluid" alt="Contoh Grafik Batang">
                         <hr>
                        <p class="card-text mt-3"><strong>Status Seluruh Laporan</strong></p>
                        <img src="https://i.imgur.com/LJWxM8A.png" class="img-fluid" alt="Contoh Grafik Lingkaran">

                    </div>
                </div>
                <div class="card shadow mb-4">
                     <div class="card-header bg-danger text-white">
                        <h5 class="card-title mb-0"><i class="bi bi-telephone-fill"></i> Kontak Darurat</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ketua RT
                            <span><strong>0812-3456-7890</strong></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Keamanan/Hansip
                            <span><strong>0898-7654-3210</strong></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pemadam Kebakaran
                            <span class="badge bg-danger rounded-pill">113</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ambulans
                            <span class="badge bg-danger rounded-pill">119</span>
                        </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                            Polsek Terdekat
                             <span><strong>(021) 123-456</strong></span>
                        </li>
                    </ul>
                </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection