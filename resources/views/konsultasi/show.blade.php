@extends('konsultasi.layout')

@section('konten')
<div class="container mt-5">
    <h2>Detail Konsultasi</h2>

    <div class="card mt-3">
        <div class="card-header">
            <h3>{{ $konsultasi->nama_pasien }}</h3>
        </div>
        <div class="card-header">
            <p><strong>Keluhan:</strong> {{ $konsultasi->keluhan }}</p>
            <p><strong>Nama Dokter:</strong> {{ $konsultasi->nama_dokter }}</p>
            <p><strong>Tanggal Konsultasi:</strong> {{ $konsultasi->tanggal_konsultasi }}</p>
            <p><strong>Jam Konsultasi:</strong> {{ $konsultasi->jam_konsultasi }}</p>
           
        </div>
        <div class="card-footer">
            <a href="{{ route('konsultasi.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('konsultasi.edit', $konsultasi->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('konsultasi.destroy', $konsultasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>