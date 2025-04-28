<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // ==========================
    // Halaman Mobile Legends
    // ==========================
    public function showMobileLegendsPage()
    {
        return view('order.mobile-legends');
    }

    public function showTransferBank($orderId)
    {
        $order = Order::with('items')->findOrFail($orderId);

        return view('payment.Transfer-Bank', compact('order'));
    }

    // ==========================
    // Simpan Pesanan (Order)
    // ==========================
    public function store(Request $request)
    {
        dd($request->all()); // Tambahkan untuk melihat data yang dikirim dari form

        DB::beginTransaction();

        try {
            // Validasi Input
            $request->validate([
                'game_user_id'   => 'required',
                'server_id'      => 'required',
                'nickname'       => 'required',
                'product_id'     => 'required|exists:products,id',
                'payment_method' => 'required',
                'phone_number'   => 'required|numeric',
                'quantity'       => 'required|integer|min:1',
            ]);

            // Ambil Data Input
            $gameUserId    = $request->game_user_id;
            $serverId      = $request->server_id;
            $nickname      = $request->nickname;
            $productId     = $request->product_id;
            $phoneNumber   = $request->phone_number;
            $paymentMethod = $request->payment_method;
            $quantity      = $request->quantity;

            // Ambil Produk
            $product = Product::find($productId);
            if (!$product) {
                return back()->withErrors(['error' => 'Produk tidak ditemukan.']);
            }

            // Hitung Total Harga
            $totalPrice = $product->price * $quantity;

            // Debugging untuk melihat apakah harga dan total dihitung dengan benar
            dd($totalPrice);

            // Simpan Pesanan
            $order = Order::create([
                'user_id'        => Auth::id(),
                'game_user_id'   => $gameUserId,
                'server_id'      => $serverId,
                'nickname'       => $nickname,
                'payment_method' => $paymentMethod,
                'phone_number'   => $phoneNumber,
                'total_price'    => $totalPrice,
                'status'         => 'pending', // Status pesanan
            ]);

            // Simpan Detail Produk (Order Item)
            OrderItem::create([
                'order_id'     => $order->id,
                'product_id'   => $product->id,
                'product_name' => $product->name,
                'quantity'     => $quantity,
                'price'        => $product->price,
                'subtotal'     => $product->price * $quantity, // Hitung subtotal per item
            ]);

            DB::commit();

            // Redirect berdasarkan metode pembayaran
            return match ($paymentMethod) {
                'P1' => redirect()->route('payment.qris', ['order' => $order->id]),
                'P2' => redirect()->route('payment.ewallet', ['order' => $order->id]),
                'P3' => redirect()->route('payment.transfer-bank', ['order' => $order->id]),
                'P4' => redirect()->route('payment.minimarket', ['order' => $order->id]),
                default => redirect()->back()->with('error', 'Metode pembayaran tidak dikenali.'),
            };

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Gagal menyimpan pesanan: ' . $e->getMessage()]);
        }
    }
}
