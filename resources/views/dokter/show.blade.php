@extends('dokter.layout')

@section('konten')
<div class="container mt-5">
    <h2>Detail Dokter</h2>

    <div class="card mt-3">
        <div class="card-header">
            <h3>{{ $dokter->nama_dokter }}</h3>
        </div>
        <div class="card-header">
            <p><strong>Alamat:</strong> {{ $dokter->alamat }}</p>
            <p><strong>No Telp:</strong> {{ $dokter->no_telp }}</p>
            <p><strong>Spesialis:</strong> {{ $dokter->spesialis }}</p>
            <p><strong>Jam Kerja:</strong> {{ $dokter->jam_dokter }}</p>
            <p><strong>Ruangan:</strong> {{ $dokter->ruangan }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>