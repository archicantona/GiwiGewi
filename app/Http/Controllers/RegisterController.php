<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
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
        try {
            // Validasi data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);

            // Simpan data ke dalam database
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Login pengguna setelah berhasil registrasi
            Auth::login($user);

            // Redirect pengguna ke halaman utama setelah berhasil login
            return redirect()->route('home');
        } catch (ValidationException $e) {
            // Tangkap kesalahan validasi khusus untuk email unik
            $errors = $e->errors();
            if (isset($errors['email']) && in_array('The email has already been taken.', $errors['email'])) {
                return response()->json([
                    'message' => 'Email already in use',
                    'errors' => $errors,
                ], 422);
            }
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $errors,
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Registration failed',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
