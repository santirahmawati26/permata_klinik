@extends('layouts.app')

@section('content')
<div class="d-flex mb-3">
    <h4>List Pasien</h4>
    <div class="ms-auto">
        <a class="btn btn-primary" href="{{ route('klinik.create') }}">Tambah</a>
    </div>
</div>

<table class="table container">
    <thead>
        <tr>
            <th>id</th>
            <th>nama pasien</th>
            <th>alamat</th>
            <th>no tlp</th>
            <th>riwayat penyakit</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($klinik as $index => $klinik)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $klinik->nama_pasien }}</td>
            <td>{{ $klinik->alamat }}</td>
            <td>{{ $klinik->no_tlp }}</td>
            <td>{{ $klinik->riwayat_penyakit }}</td>
            <td>
                <a href="{{ route('klinik.edit', $klinik->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ route('klinik.destroy', $klinik->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection