<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan plural standar
    protected $table = 'payments';

    // Tentukan field yang dapat diisi (mass assignment)
    protected $fillable = [
        'order_id', 'bank_name', 'amount', 'status',
    ];
}

