@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Daftar Pasien</h3>
            {{-- <a href="{{ route('Klinik.create') }}" class="btn btn-primary text-capitalize btn-sm">new</a> --}}
        </div>
    <div class="card-body">
        <table class="card table-sm"></table>
    </div>
        <h1>Daftar Pasien</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Tanggal konsultasi</th>
                <th>Rekam Medis</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $klinik)
            <tr>
                <td>{{ $index +1}}</td>
                <td>{{ $klinik->nama_pasien}}</td>
                <td>{{ $klinik->nama_dokter}}</td>
                <td>{{ $klinik->tanggal_konsultasi}}</td>
                <td>{{ $klinik->rekam_medis}}</td>
                <td>Option</td> <!-- Kamu perlu menambahkan pilihan aksi untuk setiap pasien -->
                <td>
                    <div>
                        {{-- <form action="{{ route('klinik.destroy', $klinik->id)}}" methode ="POST">
                            @csrf
                            @methode('DELETE')
                            <button type="submit">delete</button>
                        </form> --}}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>


@endsection