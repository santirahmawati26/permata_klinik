@extends('layouts.app')

@section('content')

<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Edit Pasien</h4>
        <form action="{{ route('klinik.update', $klinik->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>nama_pasien</label>
            <input type="text" name="nama_pasien" class="form-control mb-2"  value="{{ $klinik->nama_pasien }}" >
            <label>alamat</label>
            <input type="text" name="alamat" class="form-control mb-2"  value="{{ $klinik->alamat }}">
            <label>no_tlp</label>
            <input type="number" name="no_tlp" class="form-control mb-2"  value="{{ $klinik->no_tlp }}">
            <label>riwayat_penyakit</label>
            <input type="text" name="riwayat_penyakit" class="form-control mb-2"  value="{{ $klinik->riwayat_penyakit }}">

            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>

<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection