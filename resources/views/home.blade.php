@extends('layouts.app')

@section('content')
<div class="header-custom text-center mb-5 bg-primary text-white py-8">
    <h2 class="display-6">Permata Klinik</h2>
    <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <img src="{{ url('image/welcome-image.jpg') }}" class="img-fluid custom-img mb-4 rounded shadow" alt="welcome image">
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ url('image/welcome-image2.jpg') }}" class="img-fluid custom-img mb-4 rounded shadow" alt="welcome image">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-custom mt-4 shadow">
                <div class="card-body card-body-custom">
                    <center>
                        <h3 class="text-primary">SELAMAT DATANG DI PERMATA KLINIK</h3>
                        <p>Cek kesehatan anda di Permata Klinik</p>
                    </center>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('image/image-obat.jpg') }}" alt="obat">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Obat-obatan</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('image/image-dokter.jpg') }}" alt="dokter">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Dokter</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('image/image-konsultasi.jpg') }}" alt="konsultasi">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Konsultasi</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('image/image-layanan.jpg') }}" alt="layanan">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Layanan</b></h5>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('image/image-pasien.jpg') }}" alt="pasien">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Pasien</b></h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <h3 class="text-primary">Mengapa Harus Cek Kesehatan Di Permata Klinik?</h3>
                    <ul class="text-dark">
                        <li><strong>Dokter yang sudah berpengalaman</strong> Dokter Di Sini akan memeriksa kesehatan mu dengan detail</li>
                        <li><strong>Pelayanan dan Kenyamanan Pasien</strong> Pelayanan di Klinik ini mengutamakan kenyamanan dan keamanan pasien.</li>
                        <li><strong>Buka 24 Jam</strong> Klinik ini setiap hari selalu buka selama 24 jam</li>
                    </ul>

                    <h3 class="text-primary">Layanan Kami</h3>
                    <ul class="text-dark">
                        <li><strong>Pemeriksaan Penyakit, Tes Kesehatan, atau Konsultasi:</strong> Selalu ada untuk membantu anda ketika sakit </li>
                        <li><strong>Layanan 24/7:</strong> Dukungan Dokter dan Perawat disini yang siap membantu kapan pun Anda membutuhkannya.</li>
                        <li><strong>Penjemputan dan Pengantaran:</strong> Layanan penjemputan dan pengantaran tersedia untuk kenyamanan Anda.</li>
                    </ul>

                    <h3 class="text-primary">Tentang Kami</h3>
                    <p class="text-dark">Permata Klinik telah melayani  selama lebih dari 10 tahun di kota ini.</p>

                    <h3 class="text-primary">Hubungi Kami</h3>
                    <p class="text-dark">Jika anda membutuhkan bantuan silahkan hubungi<strong>[08976532158]</strong> atau kirimkan email ke <strong>[permataklinik1@gmail.com]</strong>. Kami siap membantu Anda dengan cepat!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection