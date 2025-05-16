<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        // Semua method kecuali logout hanya untuk guest admin
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Menampilkan halaman login admin.
     */
    public function showLoginForm()
    {
        return Auth::guard('admin')->check()
            ? redirect()->route('admin.dashboard') // Jika sudah login admin
            : view('admin.auth.login');
    }

    /**
     * Proses login admin.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'username' => 'Username atau password admin salah.',
        ])->onlyInput('username');
    }


    /**
     * Logout admin dan arahkan ke halaman login admin.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Admin berhasil logout.');
    }
}
