<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Menampilkan halaman Transfer Bank dengan data pesanan
    public function showTransferBankPage($orderId)
    {
        // Ambil data order berdasarkan orderId yang dikirimkan
        $order = Order::findOrFail($orderId);

        // Pastikan order status belum "paid"
        if ($order->status == 'paid') {
            return redirect()->route('home')->with('error', 'Pesanan ini sudah dibayar.');
        }

        // Daftar nomor rekening tetap sesuai bank
        $bankAccounts = [
            "BCA"     => ["number" => "0149876543"],
            "BRI"     => ["number" => "002658974123654"],
            "BNI"     => ["number" => "0093456789"],
            "BSI"     => ["number" => "4512345678"],
            "Mandiri" => ["number" => "008987654321234"]
        ];

        // Kirim data pesanan dan daftar rekening ke blade view
        return view('payment.Transfer-Bank', compact('order'));
    }

    // Menyimpan informasi pembayaran setelah user memilih bank dan total pembayaran
    public function transfer(Request $request)
    {
        // Validasi input
        $request->validate([
            'order_id'    => 'required|exists:orders,id',
            'bank_name'   => 'required|in:BCA,BRI,BNI,BSI,Mandiri',
            'payment_amount'=> 'required|numeric|min:1',
        ]);

        // Ambil order berdasarkan order_id yang dipilih
        $order = Order::findOrFail($request->order_id);
        
        // Pastikan order belum dibayar
        if ($order->status == 'paid') {
            return redirect()->route('home')->with('error', 'Pesanan sudah dibayar.');
        }

        // Simpan pembayaran atau update status pembayaran
        // $payment = Payment::create([...]);

        // Update status order menjadi "pending" atau sesuai
        $order->status = 'pending_payment';
        $order->save();

        // Redirect ke halaman pembayaran dengan informasi order
        return redirect()
            ->route('payment.transfer-bank', ['orderId' => $order->id])
            ->with('success', 'Silakan transfer ke rekening yang tertera.');
    }

    // Metode untuk pembayaran ewallet
    public function ewallet(Request $request)
    {
        // Implementasi proses ewallet
    }

    // Metode untuk pembayaran QRIS
    public function qris(Request $request)
    {
        // Implementasi proses QRIS
    }

    // Metode untuk pembayaran minimarket
    public function minimarket(Request $request)
    {
        // Implementasi proses minimarket
    }

}
