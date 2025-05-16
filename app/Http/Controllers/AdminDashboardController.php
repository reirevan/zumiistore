<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // Proteksi middleware auth:admin
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // Tampilkan halaman dashboard
    public function index()
    {
        // kirim data ringkasan ke view jika perlu
        return view('admin.dashboard');
    }
}
