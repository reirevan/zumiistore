<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'game_user_id', 'server_id', 'nickname', 'phone_number',
        'total_price', 'status', 'customer_type', 'payment_method', 'order_number'
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

    // Relasi dengan OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
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
}
