<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        // Semua method kecuali logout hanya untuk guest (belum login)
        $this->middleware('guest')->except('logout');
    }

    /**
     * Menampilkan halaman login.
     * Hanya bisa diakses oleh pengguna yang belum login.
     */
    public function showLoginForm()
    {
        return Auth::guard('web')->check()
            ? redirect()->route('home') // Jika sudah login user, langsung ke home
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

        if (Auth::guard('web')->attempt($credentials)) {
            // regenerate session untuk keamanan
            $request->session()->regenerate();
            // redirect ke intended URL atau home
            return redirect()->intended(route('home'));
        }

        return back()
            ->withErrors(['username' => 'Username atau password salah.'])
            ->onlyInput('username');
    }

    /**
     * Logout user dan arahkan ke halaman login.
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing')->with('success', 'Anda telah logout.');
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
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email'    => 'nullable|email|unique:users,email',
            'phone'    => 'nullable|string|max:15',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')
            ->with('success', 'Akun berhasil dibuat. Silakan login.');
    }
}
