<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KlinikController extends Controller
{
    public function index()
    {
        $klinik = Klinik::all();
        return view('klinik.index', compact('klinik'));
    }

    public function create()
    {
        return view('klinik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_tlp' => 'required|numeric',
            'riwayat_penyakit' => 'required|string',
        ]);

        Klinik::create([
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'riwayat_penyakit' => $request->riwayat_penyakit,
        ]);

        return redirect()->route('klinik.index')->with('success', 'Data klinik berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $klinik = Klinik::find($id);

        if (!$klinik) {
            return redirect()->route('klinik.index')->with('error', 'Data Klinik tidak ditemukan');
        }

        return view('klinik.edit', compact('klinik'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_tlp' => 'required|numeric',
            'riwayat_penyakit' => 'required|string',
        ]);

        $klinik = Klinik::find($id);

        if (!$klinik) {
            return redirect()->route('klinik.index')->with('error', 'Data Klinik tidak ditemukan');
        }

        $klinik->update([
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'riwayat_penyakit' => $request->riwayat_penyakit,
        ]);

        return redirect()->route('klinik.index')->with('success', 'Data Klinik berhasil diperbarui');
    }

    public function show($id)
    {
        $klinik = Klinik::find($id);

        if (!$klinik) {
            return redirect()->route('klinik.index')->with('error', 'Data Klinik tidak ditemukan');
        }

        return view('klinik.show', compact('klinik'));
    }

    public function destroy($id)
    {
        $klinik = Klinik::find($id);

        if ($klinik) {
            $klinik->delete();
            return redirect()->route('klinik.index')->with('success', 'Data Klinik berhasil dihapus');
        }

        return redirect()->route('klinik.index')->with('error', 'Data Klinik tidak ditemukan');
    }
}