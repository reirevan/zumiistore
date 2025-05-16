<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameAccountController;
use App\Http\Controllers\DiamondVariationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminAuthController;        
use App\Http\Controllers\AdminDashboardController;  
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BankAccount;

// =======================
// Admin Routes
// =======================
Route::prefix('admin')->group(function(){
    // Login & Logout Admin
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])
        ->name('admin.login')
        ->middleware('guest:admin');
    Route::post('login', [AdminAuthController::class, 'login'])
        ->middleware('guest:admin');
    Route::post('logout', [AdminAuthController::class, 'logout'])
        ->name('admin.logout')
        ->middleware('auth:admin');

    // Dashboard & protected admin pages
    Route::middleware('auth:admin')->group(function(){
        Route::get('/', [AdminDashboardController::class, 'index'])
            ->name('admin.dashboard');
        // Tambahkan route admin lainnya di sini jika nanti dibutuhkan
    });
});

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
Route::get('/nickname', [GameAccountController::class, 'getNickname']);
Route::get('/api/nickname', [GameAccountController::class, 'getNickname']);
Route::post('/get-nickname', [GameAccountController::class, 'getNickname']);


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

    // Notifikasi
    Route::get('/notifikasi', function () {
        return view('fitur.notifikasi');
    })->name('notifikasi');

    // Halaman Dasbor Akun
    Route::get('/dashboard', function () {
        return view('dashboard.Dasbor');
    })->name('dashboard');

    // Deposit Saldo
    Route::get('/dashboard/deposit', function () {
        return view('dashboard.Deposit');
    })->name('dashboard.deposit');

    // Riwayat Pesanan (# untuk sementara jika belum ada isi, tetap di-route-kan)
    Route::get('/dashboard/riwayat', function () {
        return view('dashboard.Riwayat');
    })->name('dashboard.riwayat');

    // Membership (#)
    Route::get('/dashboard/membership', function () {
        return view('dashboard.Membership');
    })->name('dashboard.membership');

    // Game ID Tersimpan (#)
    Route::get('/dashboard/savegame', function () {
        return view('dashboard.savegame');
    })->name('dashboard.savegame');
    Route::post('/save-game-account', [GameAccountController::class, 'store'])->name('save.game.account');


    // Pengaturan Akun (#)
    Route::get('/dashboard/pengaturan', function () {
        return view('dashboard.Pengaturan');
    })->name('dashboard.pengaturan');
});

// =======================
// Route untuk Mengecek Data User di Database
// =======================
Route::prefix('/cek-user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
});

// =======================
// Route AJAX: List Game Accounts
// =======================
Route::get('/api/list-game-accounts', [GameAccountController::class, 'listGameAccounts'])->name('api.list-game-accounts');

// ==============
// Rekening Bank 
// ==============
Route::get('/get-bank-details/{bank}', function ($bank) {return BankAccount::where('bank_name', $bank)->first();});
Route::get('/get-bank-details', [OrderController::class, 'getBankDetails']);

// ===================
// PAYMENT CONTROLLER 
// ===================
Route::get('/payment/ewallet/{order}', [PaymentController::class, 'ewalletPage'])->name('payment.ewallet');
Route::get('/payment/qris/{order}', [PaymentController::class, 'qrisPage'])->name('payment.qris');
Route::get('/payment/minimarket/{order}', [PaymentController::class, 'minimarketPage'])->name('payment.minimarket');
Route::get('/payment/transfer-bank', function () { return view('payment.Transfer-Bank'); })->name('payment.transfer-bank');
Route::post('/payment/transfer', [PaymentController::class, 'transfer'])->name('payment.transfer');
Route::post('/payment/ewallet', [PaymentController::class, 'ewallet'])->name('payment.ewallet.post');
Route::post('/payment/qris', [PaymentController::class, 'qris'])->name('payment.qris.post');
Route::post('/payment/minimarket', [PaymentController::class, 'minimarket'])->name('payment.minimarket.post');

// =======================
// Route Halaman Success (Tampilan Sukses setelah Pembayaran)
// =======================
Route::get('/payment/success', function () {return view('payment.Success');})->name('payment.success');

// ============
// GAME DIRECT
// ============
Route::get('/mobile-legends', [OrderController::class, 'showMobileLegendsPage'])->name('mobile-legends');
Route::post('/mobile-legends', [OrderController::class, 'store'])->name('mobile-legends.post');
Route::get('/mobile-legends', [DiamondVariationController::class, 'index'])->name('mobile-legends');

// ============
// FUNGSI CRUD
// ============
Route::post('/game-account/store', [GameAccountController::class, 'store']);
Route::put('/game-account/update/{id}', [GameAccountController::class, 'update']);
Route::delete('/game-account/delete/{id}', [GameAccountController::class, 'destroy']);