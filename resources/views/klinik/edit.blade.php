@extends('layouts.app')

@section('content')

<h4>Edit Pasien</h4>
<form action="{{ route('klinik.update', $klinik->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>nama_pasien</label>
    <input type="text" name="nama_pasien" class="form-control mb-2">
    <label>alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>no_tlp</label>
    <input type="number" name="no_tlp" class="form-control mb-2">
    <label>riwayat_penyakit</label>
    <input type="text" name="riwayat_penyakit" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection