<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Menampilkan form registrasi
    public function create()
    {
        return view('landing.register');
    }

    // Menyimpan data registrasi
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data ke dalam database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect pengguna ke halaman yang sesuai setelah berhasil registrasi
        return view('user.home')->with('success', 'Akun Anda berhasil didaftarkan! Silakan login.');
    }
}
