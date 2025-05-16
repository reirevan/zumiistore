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
    
        *::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
        }
    
        ::before,
        ::after {
            --tw-content: "";
        }
    
        html,
        :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            -webkit-tap-highlight-color: transparent;
        }
    
        body {
            margin: 0;
            line-height: inherit;
        }
    
        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }
    
        abbr[title] {
            text-decoration: underline dotted;
        }
    
        a {
            color: inherit;
            text-decoration: inherit;
        }
    
        b,
        strong {
            font-weight: bolder;
        }
    
        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
                "Courier New", monospace;
            font-size: 1em;
        }
    
        small {
            font-size: 80%;
        }

    
        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }
    
        :focus {
            outline: none;
        }
    
        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle;
        }
    
        img,
        video {
            max-width: 100%;
            height: auto;
        }
    
        [hidden] {
            display: none;
        }
    
        .absolute {
            position: absolute;
        }
    
        .relative {
            position: relative;
        }
    
        .top-0 {
            top: 0;
        }
        
        .cursor-default {
            cursor: default;
        }
    
        .rounded-md {
            border-radius: 0.375rem;
        }
    
        .border {
            border-width: 1px;
        }
    
        .border-gray-300 {
            border-color: rgb(209 213 219 / 1);
        }
    
        .bg-white {
            background-color: rgb(255 255 255 / 1);
        }
    
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
    
        .text-white {
            color: rgb(255 255 255 / 1);
        }
    
        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        }
    
        .ring-1 {
            box-shadow: 0 0 0 1px var(--tw-ring-color);
        }  
        .truncate-2-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        }
        .payment-methods {
        position: relative;
        overflow: hidden;
        white-space: nowrap;
        }
        .payment-methods img {
        display: inline-block;
        margin-right: 1rem;
        }
        @keyframes scroll {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
        }
        .scrolling {
        display: inline-block;
        animation: scroll 20s linear infinite;
        }

        .tab {
        padding: 10px 20px;
        cursor: pointer;
        background-color: #f1f1f1;
        color: black;
        display: inline-block;
        border-radius: 5px;
        }

        .tab.active {
            background-color: blue;
            color: white;
        }

        .section {
            margin-top: 50px;
            padding: 50px;
            border: 1px solid #ddd;
        }

        @media (min-width: 640px) {
            .sm\:flex {
                display: flex;
            }
    
            .sm\:hidden {
                display: none;
            }
        }

        @media (min-width: 1024px) {
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
    
            .lg\:items-end {
                align-items: flex-end;
            }
    
            .lg\:text-\[\#FF2D20\] {
                color: rgb(255 45 32 / 1);
            }
        }
    
        @media (prefers-color-scheme: dark) {
            .dark\:text-white {
                color: rgb(255 255 255 / 1);
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
                        @guest
                            <a href="{{ route('login') }}" class="bg-red-500 text-white rounded-full px-4 py-2 hover:bg-red-600 transition">
                                Masuk
                            </a>
                            <a href="{{ route('register') }}" class="ml-4 text-red-500 hover:text-red-600 transition">
                                Daftar
                            </a>
                        @endguest

                        @auth
                            @if (!Request::is('dashboard'))
                                <form action="{{ route('logout') }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white rounded-full px-4 py-2 hover:bg-red-600 transition">
                                        Logout
                                    </button>
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    
    <main class="w-full max-w-screen-xl mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto w-full px-4">
            <!-- Top banner -->
            <div class="bg-[#f4d97a] h-20 w-full rounded-md mb-8"></div>
    
            <!-- User info -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 mb-10">
                <div class="w-20 h-20 rounded-full bg-[#2d2d2d] flex-shrink-0"></div>
                <div class="flex items-center gap-2 text-[15px] font-semibold">
                    <span>{{ Auth::user()->name }}</span>
                    <button class="bg-gradient-to-b from-[#f9d54a] to-[#f4c43a] rounded-md px-3 py-1 text-[13px] font-normal flex items-center gap-1" type="button">
                        Gold
                        <i class="fas fa-angle-right text-[10px]"></i>
                    </button>
                </div>
            </div>
    
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar -->
                <aside aria-label="Sidebar navigation" class="bg-[#1f2233] rounded-xl w-full lg:w-52 flex flex-col justify-between py-6 px-5 text-white">
                    <ul class="space-y-5">
                        <!-- Profile Section -->
                        <li>
                            <h2 class="font-semibold text-lg select-none">Revan Permana</h2>
                            <span class="inline-block mt-1 px-3 py-0.5 text-xs font-semibold rounded-full bg-gradient-to-r from-[#0B1E5B] to-[#1E2F6B] text-white select-none">Admin</span>
                        </li>
                        
                        <!-- Dashboard Admin -->
                        <li>
                            <a class="flex items-center gap-2 bg-[#f9d54a] text-black rounded-md px-3 py-2 text-[13px] font-semibold" href="#">
                                <i class="fas fa-th-large text-[16px]"></i>
                                Dashboard Admin
                            </a>
                        </li>

                        <!-- Produk -->
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="#">
                                <i class="fas fa-cube text-[16px]"></i>
                                Produk
                            </a>
                        </li>

                        <!-- Pesanan -->
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="#">
                                <i class="fas fa-clipboard-list text-[16px]"></i>
                                Pesanan
                            </a>
                        </li>

                        <!-- Pembayaran -->
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="#">
                                <i class="fas fa-credit-card text-[16px]"></i>
                                Pembayaran
                            </a>
                        </li>

                        <!-- Anggota -->
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="#">
                                <i class="fas fa-user text-[16px]"></i>
                                Anggota
                            </a>
                        </li>

                        <!-- Pengaturan Akun -->
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="#">
                                <i class="fas fa-cog text-[16px]"></i>
                                Pengaturan Akun
                            </a>
                        </li>
                    </ul>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" class="mt-6">
                        @csrf
                        <button type="submit" class="w-full bg-white text-red-600 font-semibold text-[14px] py-2 rounded-md flex items-center justify-center gap-2">
                            <i class="fas fa-sign-out-alt"></i>
                            Keluar
                        </button>
                    </form>
                </aside>

                <!-- Main content -->
                <section class="flex-1 ml-6">
                <h1 class="font-semibold text-lg mb-4 select-none">Dashboard Admin</h1>
                <!-- Laporan Pesanan -->
                <section class="mb-6">
                    <div class="flex justify-between items-center mb-2 select-none">
                    <h2 class="font-semibold text-sm">Laporan Pesanan</h2>
                    <label class="text-sm" for="filter">Tampilkan :</label>
                    <select
                        class="border border-black rounded px-2 py-1 text-sm"
                        id="filter"
                        name="filter"
                    >
                        <option>Harian</option>
                    </select>
                    </div>
                    <div
                    class="bg-white rounded-md p-3 mb-4 text-sm select-none border border-transparent focus-within:border-black"
                    >
                    <p class="text-xs mb-1">Total Penghasilan</p>
                    <p class="text-base font-normal">Rp. 1.884.112,00</p>
                    </div>
                    <div class="flex space-x-3 text-xs select-none">
                    <div
                        class="bg-white rounded-md p-3 w-[80px] border border-transparent focus-within:border-black"
                    >
                        <p class="font-semibold mb-1">Seluruh Pesanan</p>
                        <p class="text-lg font-normal">10</p>
                    </div>
                    <div
                        class="bg-white rounded-md p-3 w-[80px] border border-transparent focus-within:border-black"
                    >
                        <p class="font-semibold mb-1">Dalam Proses</p>
                        <p class="text-lg font-normal text-[#D9A91B]">10</p>
                    </div>
                    <div
                        class="bg-white rounded-md p-3 w-[80px] border border-transparent focus-within:border-black"
                    >
                        <p class="font-semibold mb-1">Pesanan Selesai</p>
                        <p class="text-lg font-normal text-[#1DBE7A]">10</p>
                    </div>
                    <div
                        class="bg-white rounded-md p-3 w-[80px] border border-transparent focus-within:border-black"
                    >
                        <p class="font-semibold mb-1">Kadaluarsa</p>
                        <p class="text-lg font-normal text-[#D92B1B]">10</p>
                    </div>
                    </div>
                </section>
                <!-- Pendapatan Hari ini -->
                <section class="bg-white rounded-md p-4 mb-6 select-none border border-transparent focus-within:border-black">
                <p class="font-semibold text-sm mb-1">Pendapatan Hari ini</p>
                <p class="font-bold text-base mb-1">
                    Rp{{ number_format($todayRevenue, 0, ',', '.') }}
                    <span class="text-[#1DBE7A] font-semibold text-sm ml-1 inline-flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i>{{ $percentage }}%
                    </span>
                </p>
                <p class="text-xs mb-3">dari pendapatan kemarin</p>
                <div class="w-full rounded border border-gray-300 p-4">
                    <div class="chart-container">
                    <div class="y-axis-labels" aria-hidden="true">
                        <span>Rp.0</span>
                        <span>20jt</span>
                        <span>40jt</span>
                        <span>60jt</span>
                        <span>80jt</span>
                        <span>100jt</span>
                    </div>
                    <svg class="flex-1 h-[120px]" viewBox="0 0 720 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" focusable="false">
                        <defs>
                        <linearGradient id="gradient" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#7DD3FC" stop-opacity="0.4" />
                            <stop offset="100%" stop-color="#7DD3FC" stop-opacity="0" />
                        </linearGradient>
                        </defs>
                        <!-- Bold Y axis -->
                        <line x1="40" y1="0" x2="40" y2="120" stroke="#6b7280" stroke-width="2" />
                        <!-- Bold X axis -->
                        <line x1="40" y1="110" x2="720" y2="110" stroke="#6b7280" stroke-width="2" />
                        <!-- Horizontal grid lines -->
                        <g stroke="#e5e7eb" stroke-width="1">
                        <line x1="40" y1="90" x2="720" y2="90" />
                        <line x1="40" y1="70" x2="720" y2="70" />
                        <line x1="40" y1="50" x2="720" y2="50" />
                        <line x1="40" y1="30" x2="720" y2="30" />
                        <line x1="40" y1="10" x2="720" y2="10" />
                        </g>
                        <!-- Vertical grid lines -->
                        <g stroke="#e5e7eb" stroke-width="1">
                        <line x1="60" y1="0" x2="60" y2="120" />
                        <line x1="120" y1="0" x2="120" y2="120" />
                        <line x1="180" y1="0" x2="180" y2="120" />
                        <line x1="240" y1="0" x2="240" y2="120" />
                        <line x1="300" y1="0" x2="300" y2="120" />
                        <line x1="360" y1="0" x2="360" y2="120" />
                        <line x1="420" y1="0" x2="420" y2="120" />
                        <line x1="480" y1="0" x2="480" y2="120" />
                        <line x1="540" y1="0" x2="540" y2="120" />
                        <line x1="600" y1="0" x2="600" y2="120" />
                        <line x1="660" y1="0" x2="660" y2="120" />
                        </g>
                        <!-- Chart path and fill -->
                        <path d="M 60 110 Q 120 20 180 20 T 300 110 T 420 110 T 540 110 T 660 110" stroke="#60A5FA" stroke-width="2" fill="url(#gradient)" />
                        <!-- Data points -->
                        @foreach ($dataPoints as $point)
                        <circle cx="{{ $point['x'] }}" cy="{{ $point['y'] }}" r="4" fill="#60A5FA" stroke="#2563EB" stroke-width="1" />
                        @endforeach
                    </svg>
                    </div>
                    <div class="x-axis-labels">
                    <span>00.01 AM - 04.00 AM</span>
                    <span>05.00 AM - 08.00 AM</span>
                    <span>09.00 AM - 12.00 PM</span>
                    <span>13.00 - 16.00</span>
                    <span>17.00 - 20.00</span>
                    <span>21.00 - 23.59</span>
                    </div>
                </div>
                </section>

            </div>
        </div>
    </main>
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
