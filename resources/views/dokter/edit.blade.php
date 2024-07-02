@extends('layouts.app')

@section('content')

<h3>EDIT DOKTER</h3>
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

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection