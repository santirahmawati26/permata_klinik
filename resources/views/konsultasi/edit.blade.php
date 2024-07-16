@extends('layouts.app')

@section('content')


<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
    <div class="card-body">
        <h3 class="card-title">EDIT KONSULTASI</h3>
        <form action="{{ route('konsultasi.update', $konsultasi->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" value="{{ $konsultasi->nama_pasien }}" class="form-control mb-2">
            <label>Keluhan</label>
            <input type="text" name="keluhan" value="{{ $konsultasi->keluhan }}" class="form-control mb-2">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" value="{{ $konsultasi->nama_dokter }}" class="form-control mb-2">
            <label>Tanggal Konsultasi</label>
            <input type="date" name="tanggal_konsultasi" value="{{ $konsultasi->tanggal_konsultasi }}" class="form-control mb-2">
            <label>Jam Konsultasi</label>
            <input type="numeric" name="jam_konsultasi" value="{{ $konsultasi->jam_konsultasi }}" class="form-control mb-2">

            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>

<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection