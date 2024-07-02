@extends('layouts.app')

@section('content')

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

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection