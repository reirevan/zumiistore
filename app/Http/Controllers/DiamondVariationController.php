<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiamondVariation;

class DiamondVariationController extends Controller
{
    public function index()
    {
        $diamonds = DiamondVariation::all();
        return view('order.non_logged_user', compact('diamonds'));
    }
}
