<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User diimport jika belum diimport

class UserController extends Controller
{
    public function create()
    {
        return view('user.create'); // Ubah 'klinik.create' menjadi 'user.create' sesuai dengan view yang ingin ditampilkan
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Pastikan email unik di tabel users
            'password' => 'required|min:6', // Pastikan panjang minimal password 6 karakter
            'role' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('user.index')
            ->with('success', 'User created successfully.'); // Redirect ke index user setelah user berhasil dibuat
    }

    public function index()
    {
        $users = User::all(); // Mengambil semua data user dari database

        return view('user.index', compact('users')); // Menampilkan view 'user.index' dengan data users
    }
}
