<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = Konsultasi::all();
        return view('konsultasi.index', compact('konsultasi'));
    }

    public function create()
    {
        return view('konsultasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'keluhan' => 'required|string',
            'nama_dokter' => 'required|string',
            'tanggal_konsultasi' => 'required|date',
            'jam_konsultasi' => 'required|numeric',
        ]);

        Konsultasi::create([
            'nama_pasien' => $request->nama_pasien,
            'keluhan' => $request->keluhan,
            'nama_dokter' => $request->nama_dokter,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'jam_konsultasi' => $request->jam_konsultasi,
        ]);

        return redirect()->route('konsultasi.index')->with('success', 'Data konsultasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $konsultasi = Konsultasi::find($id);

        if (!$konsultasi) {
            return redirect()->route('konsultasi.index')->with('error', 'Data Konsultasi tidak ditemukan');
        }

        return view('konsultasi.edit', compact('konsultasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'keluhan' => 'required|string',
            'nama_dokter' => 'required|string',
            'tanggal_konsultasi' => 'required|date',
            'jam_konsultasi' => 'required|numeric',
            
        ]);

        $konsultasi = Konsultasi::find($id);

        if (!$konsultasi) {
            return redirect()->route('konsultasi.index')->with('error', 'Data Konsultasi tidak ditemukan');
        }

        $konsultasi->update([
            'nama_pasien' => $request->nama_pasien,
            'keluhan' => $request->keluhan,
            'nama_dokter' => $request->nama_dokter,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'jam_konsultasi' => $request->jam_konsultasi,
            
        ]);

        return redirect()->route('konsultasi.index')->with('success', 'Data Konsultasi berhasil diperbarui');
    }

    public function show($id)
    {
        $konsultasi = Konsultasi::find($id);

        if (!$konsultasi) {
            return redirect()->route('konsultasi.index')->with('error', 'Data Konsultasi tidak ditemukan');
        }

        return view('konsultasi.show', compact('konsultasi'));
    }

    public function destroy($id)
    {
        $konsultasi = Konsultasi::find($id);

        if ($konsultasi) {
            $konsultasi->delete();
            return redirect()->route('konsultasi.index')->with('success', 'Data Konsultasi berhasil dihapus');
        }

        return redirect()->route('konsultasi.index')->with('error', 'Data Konsultasi tidak ditemukan');
    }
}   