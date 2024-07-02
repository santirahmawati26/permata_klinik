<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));

    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required|numeric',
            'spesialis' => 'required|string',
            'jam_kerja' => 'required|string',
            'ruangan' => 'required|string',
        ]);

        Dokter::create([
            'nama_dokter' => $request->nama_dokter,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'spesialis' => $request->spesialis,
            'jam_kerja' => $request->jam_kerja,
            'ruangan' => $request->ruangan,
        ]);

        return redirect()->route('dokter.index')->with('success', 'data dokter berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required|numeric',
            'spesialis' => 'required|string',
            'jam_kerja' => 'required|string',
            'ruangan' => 'required|string',
        ]);

        $dokter = Dokter::find($id);

        if (!$dokter) {
            return redirect()->route('dokter.index')->with('error', 'Data Dokter tidak ditemukan');
        }

        $dokter->update([
            'nama_dokter' => $request->nama_dokter,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'spesialis' => $request->spesialis,
            'jam_kerja' => $request->jam_kerja,
            'ruangan' => $request->ruangan,
        ]);

        return redirect()->route('dokter.index')->with('success', 'Data Dokter berhasil diperbarui');
    }

    public function show($id)
    {
        $dokter = Dokter::find($id);

        if (!$dokter) {
            return redirect()->route('dokter.index')->with('error', 'Data Dokter tidak ditemukan');
        }

        return view('dokter.show', compact('dokter'));
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id);

        if ($dokter) {
            $dokter->delete();
            return redirect()->route('dokter.index')->with('success', 'Data Dokter Berhasil dihapus');
        }

        return redirect()->route('dokter.index')->with('error', 'Data Dokter Tidak Ditemukan');
        
    }
}
