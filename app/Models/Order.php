<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'game_user_id', 'server_id', 'nickname', 'phone_number', 'product_id', 'payment_method_id', 'quantity', 'total_price', 'status'
    ];

    // Untuk casting kolom agar terformat dengan baik
    protected $casts = [
        'total_price' => 'decimal:2', // Pastikan total_price memiliki 2 angka desimal
        'created_at' => 'datetime',   // Format timestamp
        'updated_at' => 'datetime',   // Format timestamp
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Relasi dengan OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    // Relasi dengan Payment
    public function payment()
    {
        return $this->hasOne(Payment::class, 'order_id');
    }

    // Relasi dengan Product melalui OrderItem
    public function products()
    {
        return $this->hasManyThrough(Product::class, OrderItem::class);
    }

    // Relasi dengan Product (untuk hubungan langsung dengan produk)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relasi dengan PaymentMethod
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}