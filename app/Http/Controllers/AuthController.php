<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     * Hanya bisa diakses oleh pengguna yang belum login.
     */
    public function showLoginForm()
    {
        return Auth::check()
            ? redirect()->route('home') // Jika sudah login, langsung ke home
            : view('auth.login');
    }

    /**
     * Proses login user.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = ['username' => $request->username, 'password' => $request->password];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home'); // Redirect ke home setelah login
        }

        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    /**
     * Logout user dan arahkan ke halaman login.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    /**
     * Menampilkan halaman pendaftaran (register).
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Proses registrasi user baru.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Simpan user ke database
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone ?? null,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home'); // Redirect ke home setelah register
    }
}
