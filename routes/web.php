<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameAccountController;
use App\Http\Controllers\DiamondVariationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BankAccount;

// =======================
// Route Halaman Utama (Beranda) - Bisa Diakses Semua Pengguna
// =======================
Route::get('/', function () {
    return view('welcome');
})->name('landing');

// =======================
// Route Login & Registrasi (Hanya untuk Guest)
// =======================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// =======================
// Route Logout (Hanya untuk Authenticated User)
// =======================
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// =======================
// Route Fitur Utama
// =======================
Route::get('/pricelist', function () {
    return view('fitur.pricelist');
})->name('pricelist');

Route::get('/lacak-pesanan', function () {
    return view('fitur.track');
})->name('track');

Route::get('/tentang-kami', function () {
    return view('lainnya.about');
})->name('about');

// =======================
// Route Data Game ID-Server-Nickname
// =======================
Route::get('/get-nickname', [GameAccountController::class, 'getNickname']);

// =======================
// Route Halaman Pemesanan
// =======================
Route::get('/order/guest', [DiamondVariationController::class, 'index'])->name('order.guest');
Route::get('/api/get-order-data', [OrderController::class, 'getOrderData']);
Route::post('/process-order', [OrderController::class, 'processOrder']);
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// =======================
// Route Dashboard (Hanya untuk Pengguna yang Login)
// =======================
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
});

// =======================
// Route untuk Mengecek Data User di Database
// =======================
Route::prefix('/cek-user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
});

// ==============
// Rekening Bank 
// ==============
Route::get('/get-bank-details/{bank}', function ($bank) {
    return BankAccount::where('bank_name', $bank)->first();
});
Route::get('/get-bank-details', [OrderController::class, 'getBankDetails']);

// ===================
// PAYMENT CONTROLLER 
// ===================
Route::get('/payment/ewallet/{order}', [PaymentController::class, 'ewalletPage'])->name('payment.ewallet');
Route::get('/payment/qris/{order}', [PaymentController::class, 'qrisPage'])->name('payment.qris');
Route::get('/payment/minimarket/{order}', [PaymentController::class, 'minimarketPage'])->name('payment.minimarket');
Route::get('/payment/transfer-bank', function () {
    return view('payment.Transfer-Bank');
})->name('payment.transfer-bank');
Route::post('/payment/transfer', [PaymentController::class, 'transfer'])->name('payment.transfer');
Route::post('/payment/ewallet', [PaymentController::class, 'ewallet'])->name('payment.ewallet.post');
Route::post('/payment/qris', [PaymentController::class, 'qris'])->name('payment.qris.post');
Route::post('/payment/minimarket', [PaymentController::class, 'minimarket'])->name('payment.minimarket.post');

// ============
// GAME DIRECT
// ============
Route::get('/mobile-legends', [OrderController::class, 'showMobileLegendsPage'])->name('mobile-legends');
Route::post('/mobile-legends', [OrderController::class, 'store'])->name('mobile-legends.post');
