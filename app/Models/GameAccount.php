<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    use HasFactory;

    // Kolom-kolom yang dapat diisi
    protected $fillable = ['user_id', 'server_id', 'nickname'];

    // Relasi atau aturan lainnya bisa ditambahkan di sini jika diperlukan
}
