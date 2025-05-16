<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

        <title>Zumii Store</title>
        <link rel="icon" type="image/png" href="{{ asset('storage/image/logo/Logo_3.png') }}">


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


    @extends('layouts.app')

@section('content')
<main class="container mx-auto flex items-center justify-center min-h-screen py-8 px-6">
    <div class="max-w-4xl w-full p-4">
        {{-- STEP: Proses Pemesanan --}}
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <div class="text-center mb-6">
                <p class="font-bold text-lg">Proses Pemesanan</p>
            </div>

            <div class="flex items-center justify-between">
                @php
                    $steps = [
                        ['icon' => 'file-alt', 'label' => 'Pesanan Dibuat', 'active' => true],
                        ['icon' => 'clock', 'label' => 'Verifikasi Pembayaran', 'active' => true],
                        ['icon' => 'cogs', 'label' => 'Pesanan Diproses', 'active' => false],
                        ['icon' => 'truck', 'label' => 'Pesanan Dikirim', 'active' => false],
                    ];
                @endphp

                @foreach ($steps as $step)
                    <div class="flex flex-col items-center w-1/4">
                        <i class="fas fa-{{ $step['icon'] }} text-2xl mb-2 {{ $step['active'] ? 'text-yellow-500' : 'text-gray-400' }}"></i>
                        <span class="text-xs font-semibold {{ $step['active'] ? 'text-yellow-500' : 'text-gray-400' }}">
                            {{ $step['label'] }}
                        </span>
                    </div>
                    @if (! $loop->last)
                        <div class="h-1 flex-1 bg-gray-300 mx-1 relative">
                            <div class="{{ $step['active'] ? 'bg-yellow-500' : 'bg-gray-300' }} absolute top-0 left-0 h-1 w-full"></div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        {{-- STEP: Detail Pesanan --}}
        <section class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-center font-semibold mb-2">Detail Pesanan</h2>
            <p class="text-center mb-3">Pesanan Kamu telah berhasil!</p>
        
            <div class="border-t border-b border-dashed border-black/70 py-2 mb-3 grid grid-cols-[auto_1fr] gap-x-2 gap-y-1">
                <div class="font-bold">Nomor Handphone</div>
                <div class="text-right" id="success-phone">-</div>
        
                <div class="font-bold">Waktu Pemesanan</div>
                <div class="text-right" id="success-time">-</div>
        
                <div class="font-bold">User ID / Server</div>
                <div class="text-right" id="success-userid">-</div>
        
                <div class="font-bold">Nickname</div>
                <div class="text-right" id="success-nickname">-</div>
            </div>
        
            <div class="border-t border-b border-dashed border-black/70 py-2 grid grid-cols-[auto_1fr] gap-x-2 gap-y-1">
                <div class="font-bold">Produk</div>
                <div class="text-right" id="success-product">-</div>
        
                <div class="font-bold">Harga</div>
                <div class="text-right font-bold" id="success-price">-</div>
        
                <div class="font-bold">Metode Bayar</div>
                <div class="text-right" id="success-method">-</div>
        
                <div class="font-bold">Jumlah yang harus Dibayar</div>
                <div class="text-right font-bold" id="success-total">-</div>
        
                <div class="col-span-2 flex justify-between items-center mt-3">
                    <p class="font-bold">Status Pesanan:</p>
                    <button class="bg-green-600 text-white px-4 py-1 rounded">Sukses</button>
                </div>                
            </div>
        </section>        

        {{-- STEP: Konfirmasi Pesanan Selesai --}}
        <section class="bg-white p-6 rounded-lg shadow-md mb-6 text-center text-[13px]">
            <div class="mb-6 flex justify-center items-center">
                <img id="gifImage" 
                    src="{{ asset('storage/image/payment/success2.gif') }}" 
                    alt="Pesanan Diproses" 
                    class="max-w-xs md:max-w-md w-full object-contain transition-all duration-500">
            </div>
            <h3 class="font-bold text-lg mb-1">Pesanan Selesai!</h3>
            <p class="font-semibold">Terimakasih Atas Pesanannya 😍</p>
        </section>

        {{-- STEP: Ulasan Pengalaman --}}
        <section class="mb-6 text-[13px] text-[#1a2e4a] font-semibold flex justify-center gap-1 flex-wrap">
            <span>Bagaimana Pengalaman kamu dengan</span>
            <span class="cursor-pointer">Pelayanan Kami?</span>
        </section>

        {{-- STEP: Rating Bintang --}}
        <section class="flex justify-center gap-4 mb-6 text-[#1a2e4a]">
            @for ($i = 1; $i <= 5; $i++)
                <button aria-label="Rate {{ $i }} star" class="text-[#1a2e4a] text-xl focus:outline-none" type="button">
                    <i class="far fa-star"></i>
                </button>
            @endfor
        </section>

        {{-- STEP: Tombol Kirim Ulasan --}}
        <section class="flex justify-center">
            <button type="submit" form="reviewForm"
                    class="bg-[#ff1f1f] text-white text-[13px] font-normal rounded-md w-full max-w-xs py-2">
                Kirim Ulasan
            </button>
        </section>

        {{-- Hidden Review Form --}}
        <form id="reviewForm" action="#" method="POST" class="hidden">
            @csrf
            <input type="hidden" name="rating" value="" />
        </form>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let orderData = JSON.parse(localStorage.getItem("transferBankOrder"));
        let finalAmount = localStorage.getItem("finalPaymentAmount");

        if (!orderData || !orderData.product || !orderData.price || !finalAmount) {
            alert("Data pesanan tidak ditemukan.");
            window.location.href = "/";
            return;
        }

        // Format tanggal dan waktu
        let now = new Date();
        let waktu = now.toLocaleString("id-ID", {
            day: "numeric",
            month: "long",
            year: "numeric",
            hour: "2-digit",
            minute: "2-digit",
        });

        // Bersihkan harga dari Rp dan titik/koma
        let cleanPrice = parseInt(orderData.price.replace(/[^\d]/g, ""));

        // Tampilkan data
        document.getElementById("success-phone").textContent = orderData.phone || "-";
        document.getElementById("success-time").textContent = waktu;
        document.getElementById("success-userid").textContent = orderData.userID || "-";
        document.getElementById("success-nickname").textContent = orderData.nickname || "-";
        document.getElementById("success-product").textContent = orderData.product || "-";
        document.getElementById("success-price").textContent = "Rp. " + cleanPrice.toLocaleString("id-ID");
        document.getElementById("success-total").textContent = "Rp. " + parseInt(finalAmount).toLocaleString("id-ID");
        document.getElementById("success-method").innerHTML = "Gerai Minimarket <span class='font-bold'>" + (orderData.paymentMethod || "-") + "</span>";
    });

    // Ganti GIF setelah 15 detik
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            const gifImage = document.getElementById("gifImage");
            gifImage.src = "{{ asset('storage/image/payment/done2.gif') }}";
        }, 15000);
    });
</script>


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
                        <p><a href="{{ route('pricelist') }}" class="text-blue-400 hover:underline">Daftar Harga</a></p>
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
                        <p><a href="{{ route('about') }}" class="text-blue-400 hover:underline">Tentang Kami</a></p>
                        <p><a href="{{ route('about') }}" class="text-blue-400 hover:underline">Testimoni</a></p>
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
        
            <p class="text-center text-gray-500">COPYRIGHTS © 2025 ZUMII STORE</p>
        </div>
    </footer>
    </body>
</html>
