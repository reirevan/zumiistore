<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Menampilkan halaman pendaftaran.
     */
    public function showRegisterForm()
    {
        return view('auth.register'); // Pastikan view ini ada di resources/views/auth/register.blade.php
    }

    /**
     * Memproses pendaftaran pengguna.
     */
    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan pengguna baru
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman login
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
