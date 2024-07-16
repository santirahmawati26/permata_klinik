@extends('layouts.app')

@section('content')

<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
    <div class="card-body">
    <h3>TAMBAH DOKTER</h3>
    <form action="{{ route('dokter.store') }}" method="post">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama_dokter" class="form-control mb-2">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control mb-2">
        <label>No Telepon</label>
        <input type="number" name="no_telp" class="form-control mb-2">
        <label>Spesialis</label>
        <input type="text" name="spesialis" class="form-control mb-2">
        <label>Jam Kerja</label>
        <input type="text" name="jam_kerja" class="form-control mb-2">
        <label>Ruangan</label>
        <input type="text" name="ruangan" class="form-control mb-2">

        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
</div>

<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection