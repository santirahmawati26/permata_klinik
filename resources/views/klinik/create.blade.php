@extends('layouts.app')

@section('content')

<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
    <div class="card-body">
        <h4>Tambah Pasien</h4>
        <form action="{{ route('klinik.store') }}" method="post">
            @csrf
            <label>Nama pasien</label>
            <input type="text" name="nama_pasien" class="form-control mb-2">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control mb-2">
            <label>No Telepon</label>
            <input type="number" name="no_tlp" class="form-control mb-2">
            <label>Riwayat Penyakit</label>
            <input type="text" name="riwayat_penyakit" class="form-control mb-2">

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
</div>

<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection