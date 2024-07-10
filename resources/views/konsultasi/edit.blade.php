@extends('layouts.app')

@section('content')

<h3>EDIT KONSULTASI</h3>
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

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection