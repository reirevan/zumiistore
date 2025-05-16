<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan dalam database
    protected $table = 'payment_methods';

    // Kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'name', 'description', 'status',
    ];

    // Relasi dengan Order (Setiap metode pembayaran bisa digunakan dalam beberapa pesanan)
    public function orders()
    {
        return $this->hasMany(Order::class, 'payment_method_id');
    }
}
