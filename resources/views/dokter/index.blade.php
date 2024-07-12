@extends('layouts.app')

@section('content')
<div class="container">
    <h3>DAFTAR DOKTER</h3>   
    <a href="{{ route('dokter.create') }}" class="btn btn-primary">Tambah Dokter</a> 

    <table class="table mt-3">
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
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
