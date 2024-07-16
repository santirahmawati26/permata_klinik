@extends('layouts.app')

@section('content')
<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
    {{-- <p class="lead">Pilihan Terbaik untuk Kebutuhan Kesehatan Anda</p> --}}
</div>
<div class="card">
        <div class="card-body">
        <h5 class="card-title">DATA DOKTER</h5>   
        <a href="{{ route('dokter.create') }}" class="btn btn-success">Tambah Dokter</a> 

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Spesialis</th>
                    <th>Jam Kerja</th>
                    <th>Ruangan</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dokter as $index => $dokter)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $dokter->nama_dokter }}</td>
                    <td>{{ $dokter->alamat }}</td>
                    <td>{{ $dokter->no_telp }}</td>
                    <td>{{ $dokter->spesialis }}</td>
                    <td>{{ $dokter->jam_kerja }}</td>
                    <td>{{ $dokter->ruangan }}</td>
                    <td>
                        <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST">
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
