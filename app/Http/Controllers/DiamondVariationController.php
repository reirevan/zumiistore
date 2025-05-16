<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiamondVariation;

class DiamondVariationController extends Controller
{
    public function index()
    {
        // Ambil semua varian diamond dari database
        $diamonds = DiamondVariation::all(); // Ambil semua varian diamond

        // dd($diamonds);

        // Kirim data ke view
        return view('order.mobile-legends', compact('diamonds'));
    }
}
