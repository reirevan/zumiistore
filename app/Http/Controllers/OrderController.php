<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'game_user_id'     => 'required|string',
            'server_id'        => 'nullable|string',
            'nickname'         => 'required|string',
            'phone_number'     => 'required|string',
            'variation_id'     => 'required|exists:product_variations,id',
            'payment_method'   => 'required|string',
            'quantity'         => 'required|integer|min:1',
        ]);

        // Ambil data variasi produk
        $variation = \App\Models\ProductVariation::findOrFail($request->variation_id);

        // Hitung total harga (qty x harga satuan)
        $total = $variation->price * $request->quantity;

        // Simpan ke tabel orders
        $order = \App\Models\Order::create([
            'game_user_id'     => $request->game_user_id,
            'server_id'        => $request->server_id,
            'nickname'         => $request->nickname,
            'phone_number'     => $request->phone_number,
            'product_id'       => $variation->product_id,
            'payment_method'   => $request->payment_method,
            'quantity'         => $request->quantity,
            'total_price'      => $total,
            'status'           => 'pending',
            'ordered_at'       => now(),
        ]);

        // Simpan ke order_items
        $order->items()->create([
            'variation_id' => $variation->id,
            'price'        => $variation->price,
            'quantity'     => $request->quantity,
            'subtotal'     => $total,
        ]);

        // Redirect ke halaman sukses (sementara)
        return redirect()->route('payment.success')->with('success', 'Pesanan berhasil dibuat!');
    }

}
