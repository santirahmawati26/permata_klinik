@extends('layouts.app')

@section('content')
<div class="container">
    <h3>DAFTAR KONSULTASI</h3>   
    <a href="{{ route('konsultasi.create') }}" class="btn btn-primary">Tambah Konsultasi</a> 

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Keluhan</th>
                <th>Nama Dokter</th>
                <th>Tanggal Konsultasi</th>
                <th>Jam Konsultasi</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($konsultasi as $index => $konsultasi)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $konsultasi->nama_pasien }}</td>
                <td>{{ $konsultasi->keluhan }}</td>
                <td>{{ $konsultasi->nama_dokter }}</td>
                <td>{{ $konsultasi->tanggal_konsultasi }}</td>
                <td>{{ $konsultasi->jam_konsultasi }}</td>
                <td>
                    <a href="{{ route('konsultasi.edit', $konsultasi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
                <td>
                    <form action="{{ route('konsultasi.destroy', $konsultasi->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection