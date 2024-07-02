@extends('klinik.layout')

@section('klinik')
<div class="container mt-5">
    <h2>Detail Pasien</h2>

    <div class="card mt-3">
        <div class="card-header">
            <h3>{{ $klinik->nama_pasien }}</h3>
</div>
<div class="card-body">
    <p><strong>alamat:</strong> {{ $klinik->alamat }}</p>
    <p><strong>no_tlp:</strong> {{ $klinik->no_tlp }}</p>
    <p><strong>riwayat_penyakit:</strong> {{ $klinik->riwayat_penyakit }}</p>
</div>
<div class="card-footer">
    <a href="{{ route('klinik.index') }}" class="btn btn-secondary"> Kembali</a>
    <a href="{{ route('klinik.edit', $klinik->id) }}" class="btn btn-warning"> Edit</a>
    <a href="{{ route('klinik.destroy', $klinik->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?'>
    @csrf
    @method<('DELETE')
<button class="btn btn-danger">Delete</button>
    </form>
</div>
</div>
</div>