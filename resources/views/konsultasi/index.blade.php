@extends('layouts.app')

@section('content')
<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
    <div class="card-body">
    <h5 class="card-title">DATA KONSULTASI</h5>   
    <a href="{{ route('konsultasi.create') }}" class="btn btn-success">Tambah Konsultasi</a> 

    <table class="table table-striped">
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
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Menghapus Ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>

<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection