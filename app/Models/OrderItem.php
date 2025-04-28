<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'product_id', 'variation_id', 'quantity', 'price', 'subtotal'
    ];

    // Untuk casting kolom agar terformat dengan baik
    protected $casts = [
        'subtotal' => 'decimal:2', // Pastikan subtotal memiliki 2 angka desimal
    ];

    // Relasi dengan Order
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    // Relasi dengan Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relasi dengan ProductVariation (jika ada)
    public function variation()
    {
        return $this->belongsTo(ProductVariation::class, 'variation_id'); // Jika ada model untuk variasi produk
    }
}
