@extends('layouts.app')

@section('content')

<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
    <div class="card-body">
        <h3 class="card-title">EDIT DATA DOKTER</h3>
        <form action="{{ route('dokter.update', $dokter->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama</label>
            <input type="text" name="nama_dokter" value="{{ $dokter->nama_dokter }}" class="form-control mb-2">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $dokter->alamat }}" class="form-control mb-2">
            <label>No Telepon</label>
            <input type="number" name="no_telp" value="{{ $dokter->no_telp }}" class="form-control mb-2">
            <label>Spesialis</label>
            <input type="text" name="spesialis" value="{{ $dokter->spesialis }}" class="form-control mb-2">
            <label>Jam Kerja</label>
            <input type="text" name="jam_kerja" value="{{ $dokter->jam_kerja }}" class="form-control mb-2">
            <label>Ruangan</label>
            <input type="text" name="ruangan" value="{{ $dokter->ruangan }}" class="form-control mb-2">

            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>

<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection