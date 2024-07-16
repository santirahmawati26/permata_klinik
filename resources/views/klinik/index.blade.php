@extends('layouts.app')

@section('content')
<div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">DATA PASIEN</h5>
        <a class="btn btn-success" href="{{ route('klinik.create') }}">Tambah Pasien</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Riwayat Penyakit</th>
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