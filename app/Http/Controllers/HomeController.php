<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Pastikan ini sesuai dengan nama file view di resources/views/home.blade.php
    }
}
