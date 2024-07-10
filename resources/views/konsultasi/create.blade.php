@extends('layouts.app')

@section('content')

<h3>TAMBAH KONSULTASI</h3>
<form action="{{ route('konsultasi.store') }}" method="post">
    @csrf
    <label>Nama Pasien</label>
    <input type="text" name="nama_pasien" class="form-control mb-2">
    <label>Keluhan</label>
    <input type="text" name="keluhan" class="form-control mb-2">
    <label>Nama Dokter</label>
    <input type="text" name="nama_dokter" class="form-control mb-2">
    <label>Tanggal Konsultasi</label>
    <input type="date" name="tanggal_konsultasi" class="form-control mb-2">
    <label>Jam Konsultasi</label>
    <input type="numeric" name="jam_konsultasi" class="form-control mb-2">


    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection