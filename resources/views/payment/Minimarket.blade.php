<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

        <title>Zumii Store</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <style>
        /* Reset Styles */
        html, body {
            margin: 0;
            padding: 0;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit;
            margin: 0;
        }
        
        p {
            margin: 0;
        }
        
        strong {
            font-weight: bolder;
        }
        
        /* Links */
        a {
            color: inherit;
            text-decoration: none;
        }
        
        /* Forms & Inputs */
        button, input, select, textarea {
            font-family: inherit;
            font-size: 100%;
            margin: 0;
            padding: 0;
        }
        
        button {
            cursor: pointer;
        }
        
        /* Layout */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .flex {
            display: flex;
        }
        
        .hidden {
            display: none;
        }
        
        /* Positioning */
        .absolute {
            position: absolute;
        }
        
        .relative {
            position: relative;
        }
        
        /* Borders & Shadows */
        .border {
            border-width: 1px;
            border-style: solid;
            border-color: #e5e7eb;
        }
        
        .rounded-md {
            border-radius: 0.375rem;
        }
        
        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        }
        
        /* Backgrounds */
        .bg-white {
            background-color: #fff;
        }
        
        .bg-gray-200 {
            background-color: #e5e7eb;
        }
        
        /* Text */
        .text-center {
            text-align: center;
        }
        
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
        
        .text-black {
            color: rgb(0 0 0 / 1);
        }
        
        .text-gray-500 {
            color: rgb(107 114 128 / 1);
        }
        
        .text-white {
            color: rgb(255 255 255 / 1);
        }
        
        .underline {
            text-decoration-line: underline;
        }
        
        /* Payment Methods */
        .payment-methods {
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }
        
        .payment-methods img {
            display: inline-block;
            margin-right: 1rem;
        }
        
        /* Scrolling Effect */
        .scrolling {
            display: inline-block;
            animation: scroll 20s linear infinite;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        </style>
    
    <body class="bg-gray-200">
        <!-- Header -->
        @extends('layouts.app')

        @section('title', 'Zumii Store')
        
        @section('content')
        <header class="bg-white shadow-md">
            <div class="container mx-auto flex flex-col items-center py-4 px-6">
                <div class="w-full flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('landing') }}" class="flex items-center">
                            <img alt="ZUMII STORE logo" class="h-10 w-10" src="{{ asset('storage/image/logo/Logo_3.png') }}" width="50" height="50"/>
                            <span class="ml-2 text-xl font-bold">ZUMII STORE</span>
                        </a>
                    </div>
        
                    <!-- Search Bar -->
                    <div class="hidden md:flex items-center w-1/2 relative">
                        <input class="border border-gray-300 rounded-full pl-10 pr-4 py-2 w-full focus:outline-none" 
                            placeholder="Cari Produk" type="text"/>
                        <i class="fas fa-search text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                    </div>
        
                    <!-- Login/Logout Button -->
                    <div>
                        @auth
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="bg-red-500 text-white rounded-full px-4 py-2 hover:bg-red-600 transition">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="bg-red-500 text-white rounded-full px-4 py-2 hover:bg-red-600 transition">
                                Masuk
                            </a>
                            <a href="{{ route('register') }}" class="ml-4 text-red-500 hover:text-red-600 transition">
                                Daftar
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>


    <main class="container mx-auto flex items-center justify-center min-h-screen py-8 px-6">
        <div class="max-w-4xl mx-auto p-4">
            <!-- Process Steps -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="text-center mb-4">
                    <p class="font-bold">Proses Pemesanan</p>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-file-alt text-gray-500 text-2xl"></i>
                        <span class="mt-2 text-gray-500">Pesanan Dibuat</span>
                    </div>
                    <div class="flex-1 h-1 bg-yellow-500 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-clock text-yellow-500 text-2xl"></i>
                        <span class="mt-2 text-yellow-500">Verifikasi Pembayaran</span>
                    </div>
                    <div class="flex-1 h-1 bg-yellow-500 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-cogs text-gray-500 text-2xl"></i>
                        <span class="mt-2 text-gray-500">Pesanan Diproses</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-300 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-truck text-gray-500 text-2xl"></i>
                        <span class="mt-2 text-gray-500">Pesanan Dikirim</span>
                    </div>
                </div>
            </div>
    
            <!-- Payment Verification -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="text-center mb-4">
                    <p class="font-bold">Instruksi Pembayaran</p>
                </div>
                <div class="mb-4">
                    <div class="flex items-center mb-2">
                        <div class="bg-yellow-500 text-white rounded-full w-6 h-6 flex items-center justify-center">1</div>
                        <span class="ml-2 font-bold">Verifikasi Pembayaran</span>
                    </div>
                    <p>Yuk segera lakukan pembayaran sebelum batas waktu pemesanan berakhir, pesanan akan dibatalkan secara otomatis jika belum melakukan pembayaran.</p>
                    <div class="text-center text-red-500 text-4xl font-bold my-4">
                        <span id="payment-countdown">03:00:00</span>
                    </div>
                <div class="mb-4">
                    <div class="flex items-center mb-2">
                        <div class="bg-yellow-500 text-white rounded-full w-6 h-6 flex items-center justify-center">2</div>
                        <span class="ml-2 font-bold">Konfirmasi Pembayaran</span>
                    </div>
                    <p>Silahkan lakukan pembayaran pada metode pembayaran yang telah dipilih. pastikan Nomor dan atasnama Rekening telah sesuai</p>
                    <div class="mt-2">
                        <p><strong>Metode Pembayaran</strong> <span class="float-right">Bank BCA</span></p>
                        <p>
                            <strong>Nomor Rekening</strong> 
                            <span class="float-right font-bold">
                                <span id="account-number">0462556207</span>
                                <i class="fas fa-copy cursor-pointer" onclick="copyText('account-number', 'Nomor Rekening')" title="Salin"></i>
                            </span>
                        </p>
                        <p class="text-gray-500 text-right">(atasnama Rekening PT. IZUMI SUTORU)</p>
                        <p>
                            <strong>Jumlah Bayar</strong> 
                            <span class="float-right font-bold text-black">
                                <span id="payment-amount">Rp. 100.<span class="text-red-500">342,-</span></span>
                                <i class="fas fa-copy cursor-pointer" onclick="copyText('payment-amount', 'Jumlah Bayar')" title="Salin"></i>
                            </span>
                        </p>
                        <p class="text-gray-500 text-right">(Mohon Bayar dengan nominal tertera)</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="font-bold">Status Pesanan</p>
                            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Belum Bayar</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center mb-2">
                        <div class="bg-yellow-500 text-white rounded-full w-6 h-6 flex items-center justify-center">3</div>
                        <span class="ml-2 font-bold">Mengalami Kendala Pemesanan?</span>
                    </div>
                    <p>jika kamu mengalami kendala saat melakukan Pemesanan, <a href="#" class="text-red-500">Hubungi Admin</a></p>
                </div>
            </div>
        </div>
    
            <!-- Order Details -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="mb-4 text-center">
                    <p class="font-bold">Detail Pesanan</p>
                    <p class="text-black">Mohon Periksa kembali pesanan kamu sebelum melakukan Pembelian! Kesalahan Pembelian ditanggung Pembeli</p>
                </div>
                <div class="border-t border-b border-gray-300 py-2 border-dashed">
                    <p>
                        <strong>Nomor Invoice</strong> 
                        <span class="float-right font-bold">
                            <span id="invoice-code">ZS112233445566</span>
                            <i class="fas fa-copy cursor-pointer" onclick="copyText('invoice-code', 'Nomor Invoice')" title="Salin"></i>
                        </span>
                    </p>
                    <p><strong>Waktu Pemesanan</strong> <span class="float-right">1 Januari 2025 13:25</span></p>
                    <p><strong>Nickname</strong> <span class="float-right">Rey Izumii</span></p>
                    <p><strong>User ID / Server</strong> <span class="float-right">11223344 (5566)</span></p>
                </div>
                <div class="py-2">
                    <p><strong>Produk</strong> <span class="float-right">Mobile Legends 500 Diamonds</span></p>
                    <p><strong>Harga</strong> <span class="float-right">Rp. 100.000,-</span></p>
                    <p><strong>Metode Bayar</strong> <span class="float-right">Transfer Bank BCA</span></p>
                    <p><strong>Jumlah yang harus Dibayar</strong> <span class="float-right text-red-500">Rp. 100.342,-</span></p>
                </div>
                <div class="py-4 text-center">
                    <p class="font-bold text-xl my-4">MOHON TUNGGU</p>
                </div>                
            </div>
    
            <!-- Order Process -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="mb-4">
                    <p>Note:</p>
                    <p>Diamonds Akan Masuk secara otomatis ke akun game <strong>Mobile Legends</strong> jika telah melakukan Pembayaran. silahkan lakukan re-login jika pesanan kamu belum masuk.</p>
                </div>
            </div>
            <!-- Contact CS -->
            <div class="text-center mb-4">
                <p class="font-bold text-left">Pesanan Belum diterima?</p>
                <button class="bg-black text-white px-4 py-2 rounded">Hubungi CS Sekarang</button>
            </div>
    </main>
    <script>
        function startPaymentTimer(duration) {
            let countdownElement = document.getElementById("payment-countdown");
            let endTime = Date.now() + duration;
    
            function updateTimer() {
                let now = Date.now();
                let timeLeft = Math.max(0, endTime - now);
    
                let hours = Math.floor(timeLeft / (1000 * 60 * 60));
                let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
    
                countdownElement.innerHTML = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    
                if (timeLeft > 0) {
                    requestAnimationFrame(updateTimer);
                } else {
                    countdownElement.innerHTML = "EXPIRED";
                    countdownElement.classList.remove("text-red-500");
                    countdownElement.classList.add("text-gray-500");
                }
            }        
            updateTimer();
        }
    
        // Timer 3 jam = 3 * 60 * 60 * 1000 ms
        startPaymentTimer(3 * 60 * 60 * 1000);
    </script>

    {{-- <---MENGATUR ICON COPY---> --}}
        <script>
            function copyText(elementId, label) {
                let element = document.getElementById(elementId);
        
                // Ambil seluruh teks termasuk elemen anak (misalnya span dalam Jumlah Bayar)
                let textToCopy = element.innerText.trim().replace(/\n/g, "");  
        
                // Gunakan Clipboard API untuk menyalin teks
                navigator.clipboard.writeText(textToCopy).then(() => {
                    alert(label + " berhasil disalin: " + textToCopy);
                }).catch(err => {
                    console.error("Gagal menyalin teks: ", err);
                });
            }
        </script>
    
<br>
<!-- Footer -->
<footer class="bg-gray-900 text-white">
            <div class="container mx-auto py-12">
                <div class="flex flex-col md:flex-row justify-between items-start mb-8">
                    <!-- Logo dan Deskripsi -->
                    <div class="w-full md:w-1/3 text-left">
                        <img alt="Zumii Store logo with a dragon and text 'Your Daily Gaming'" class="mb-4" height="150" src="{{ asset('storage/image/logo/Logo_3.png') }}" width="150"/>
                        <p class="leading-tight">
                            Zumii Store adalah platform top-up game online yang dirancang untuk memudahkan para gamer
                            melakukan pembelian voucher game dengan cepat, aman, dan terpercaya.
                        </p>
                    </div>

                    <!-- Menu Footer -->
                    <div class="w-full md:w-2/3 grid grid-cols-2 md:grid-cols-4 gap-8 text-left">
                        <div>
                            <h2 class="font-bold mb-2">Fitur</h2>
                            <p><a href="/lacak-pesanan" class="text-blue-400 hover:underline">Lacak Pesanan</a></p>
                            <p><a href="/daftar-harga" class="text-blue-400 hover:underline">Daftar Harga</a></p>
                        </div>
                        <div>
                            <h2 class="font-bold mb-2">Customer Service</h2>
                            <p><a href="/hubungi-admin" class="text-blue-400 hover:underline">Hubungi Admin</a></p>
                        </div>
                        <div>
                            <h2 class="font-bold mb-2">Ikuti Kami</h2>
                            <div class="flex space-x-4">
                                <a href="https://instagram.com" target="_blank">
                                    <i class="fab fa-instagram text-2xl text-pink-500 hover:text-pink-400"></i>
                                </a>
                                <a href="mailto:admin@example.com">
                                    <i class="fas fa-envelope text-2xl text-gray-300 hover:text-gray-400"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <h2 class="font-bold mb-2">Lainnya</h2>
                            <p><a href="/tentang-kami" class="text-blue-400 hover:underline">Tentang Kami</a></p>
                        </div>
                    </div>                    
                </div>
                <!-- Kepercayaan Pelanggan -->
                <div class="text-center mb-8">
                    <h2 class="font-bold text-xl mb-4">Zumii Store telah Dipercaya oleh Para Gamer Profesional</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="border border-gray-700 p-4 rounded">
                            <p class="text-2xl font-bold">1500+</p>
                            <p>Pengguna</p>
                        </div>
                        <div class="border border-gray-700 p-4 rounded">
                            <p class="text-2xl font-bold">10.000+</p>
                            <p>Transaksi</p>
                        </div>
                        <div class="border border-gray-700 p-4 rounded">
                            <p class="text-2xl font-bold">50+</p>
                            <p>Produk</p>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-700 mb-8"/>
                <!-- Pembayaran -->
                <div class="text-center mb-8">
                    <h2 class="font-bold text-xl mb-4">Berbagai Macam Pembayaran</h2>
                    <div class="payment-methods bg-white p-4 rounded">
                        <div class="scrolling flex justify-center items-center space-x-4">
                            <img alt="BCA logo" src="{{ asset('storage/image/payment/bca.png') }}" class="h-12 object-contain"/>
                            <img alt="Mandiri logo" src="{{ asset('storage/image/payment/mandiri.png') }}" class="h-12 object-contain"/>
                            <img alt="Bank BRI logo" src="{{ asset('storage/image/payment/bri.png') }}" class="h-12 object-contain"/>
                            <img alt="DANA logo" src="{{ asset('storage/image/payment/dana.png') }}" class="h-12 object-contain"/>
                            <img alt="Gopay logo" src="{{ asset('storage/image/payment/gopay.png') }}" class="h-12 object-contain"/>
                            <img alt="Link Aja! logo" src="{{ asset('storage/image/payment/link-aja.png') }}" class="h-12 object-contain"/>
                            <img alt="OVO logo" src="{{ asset('storage/image/payment/ovo.png') }}" class="h-12 object-contain"/>
                            <img alt="Shopee Pay logo" src="{{ asset('storage/image/payment/shopeepay.png') }}" class="h-12 object-contain"/>
                            <img alt="Alfamart logo" src="{{ asset('storage/image/payment/alfamart.png') }}" class="h-12 object-contain"/>
                            <img alt="Indomaret logo" src="{{ asset('storage/image/payment/indomaret.png') }}" class="h-12 object-contain"/>
                        </div>
                    </div>
                </div>
            
                <p class="text-center text-gray-500">COPYRIHTS © 2025 ZUMII STORE</p>
            </div>
        </footer>
    </body>
</html>
