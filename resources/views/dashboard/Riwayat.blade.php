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
                <nav class="bg-[#1f2233] rounded-xl w-full lg:w-52 flex flex-col justify-between py-6 px-5 text-white">
                    <ul class="space-y-5">
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="{{ route('dashboard') }}">
                                <i class="fas fa-th-large text-[16px]"></i>
                                Dashboard Akun
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="{{ route('dashboard.deposit') }}">
                                <i class="fas fa-credit-card text-[16px]"></i>
                                Deposit Saldo
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 bg-[#f9d54a] text-black rounded-md px-3 py-2 text-[13px] font-semibold" href="#">
                                <i class="fas fa-clipboard-list text-[16px]"></i>
                                Riwayat Pesanan
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="{{ route('dashboard.membership') }}">
                                <i class="fas fa-user-friends text-[16px]"></i>
                                Membership
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="{{ route('dashboard.savegame') }}">
                                <i class="fas fa-id-card text-[16px]"></i>
                                Game ID Tersimpan
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="{{ route('dashboard.pengaturan') }}">
                                <i class="fas fa-cog text-[16px]"></i>
                                Pengaturan Akun
                            </a>
                        </li>
                    </ul>

                    <form action="{{ route('logout') }}" method="POST" class="mt-6">
                        @csrf
                        <button type="submit" class="w-full bg-white text-red-600 font-semibold text-[14px] py-2 rounded-md flex items-center justify-center gap-2">
                            <i class="fas fa-sign-out-alt"></i>
                            Keluar
                        </button>
                    </form>
                </nav>
                <!-- Main content -->
                <div class="flex-1">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-900 text-white text-xs font-semibold text-center">
                                <th class="py-3 px-4 rounded-tl-md">Produk</th>
                                <th class="py-3 px-4">Nomor Handphone</th>
                                <th class="py-3 px-4">User ID</th>
                                <th class="py-3 px-4">Tanggal</th>
                                <th class="py-3 px-4">Harga</th>
                                <th class="py-3 px-4 rounded-tr-md">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs text-gray-900">
                            <!-- Row 1 -->
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-4 flex items-center space-x-3">
                                    <img src="https://storage.googleapis.com/a1aa/image/1fccaa95-6a3b-496f-525e-d923fba4e233.jpg" alt="Produk" class="w-10 h-10 rounded-sm flex-shrink-0" />
                                    <div>
                                        <p class="font-semibold leading-tight">Mobile Legends</p>
                                        <p class="text-gray-600 text-[9px] leading-tight">Weekly Diamond Pass</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center">087804135926</td>
                                <td class="py-3 px-4 text-center flex items-center justify-center space-x-1">
                                    <span>112233 - 1122</span>
                                    <button aria-label="Copy user ID" class="text-gray-600 hover:text-gray-900">
                                        <i class="far fa-copy text-xs"></i>
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-center">1-11-2024 14:25</td>
                                <td class="py-3 px-4 text-center font-bold">Rp 28.000</td>
                                <td class="py-3 px-4 text-center">
                                    <span class="bg-green-600 text-white text-[10px] font-semibold rounded-md px-3 py-1 inline-block">Sukses</span>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-4 flex items-center space-x-3">
                                    <img src="https://storage.googleapis.com/a1aa/image/1fccaa95-6a3b-496f-525e-d923fba4e233.jpg" alt="Produk" class="w-10 h-10 rounded-sm flex-shrink-0" />
                                    <div>
                                        <p class="font-semibold leading-tight">Mobile Legends</p>
                                        <p class="text-gray-600 text-[9px] leading-tight">Weekly Diamond Pass</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center">087804135926</td>
                                <td class="py-3 px-4 text-center flex items-center justify-center space-x-1">
                                    <span>112233 - 1122</span>
                                    <button aria-label="Copy user ID" class="text-gray-600 hover:text-gray-900">
                                        <i class="far fa-copy text-xs"></i>
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-center">1-11-2024 14:25</td>
                                <td class="py-3 px-4 text-center font-bold">Rp 28.000</td>
                                <td class="py-3 px-4 text-center">
                                    <span class="bg-green-600 text-white text-[10px] font-semibold rounded-md px-3 py-1 inline-block">Sukses</span>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-4 flex items-center space-x-3">
                                    <img src="https://storage.googleapis.com/a1aa/image/1fccaa95-6a3b-496f-525e-d923fba4e233.jpg" alt="Produk" class="w-10 h-10 rounded-sm flex-shrink-0" />
                                    <div>
                                        <p class="font-semibold leading-tight">Mobile Legends</p>
                                        <p class="text-gray-600 text-[9px] leading-tight">Weekly Diamond Pass</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center">087804135926</td>
                                <td class="py-3 px-4 text-center flex items-center justify-center space-x-1">
                                    <span>112233 - 1122</span>
                                    <button aria-label="Copy user ID" class="text-gray-600 hover:text-gray-900">
                                        <i class="far fa-copy text-xs"></i>
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-center">1-11-2024 14:25</td>
                                <td class="py-3 px-4 text-center font-bold">Rp 28.000</td>
                                <td class="py-3 px-4 text-center">
                                    <span class="bg-gray-600 text-white text-[10px] font-semibold rounded-md px-3 py-1 inline-block">Pending</span>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-4 flex items-center space-x-3">
                                    <img src="https://storage.googleapis.com/a1aa/image/1fccaa95-6a3b-496f-525e-d923fba4e233.jpg" alt="Produk" class="w-10 h-10 rounded-sm flex-shrink-0" />
                                    <div>
                                        <p class="font-semibold leading-tight">Mobile Legends</p>
                                        <p class="text-gray-600 text-[9px] leading-tight">Weekly Diamond Pass</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center">087804135926</td>
                                <td class="py-3 px-4 text-center flex items-center justify-center space-x-1">
                                    <span>112233 - 1122</span>
                                    <button aria-label="Copy user ID" class="text-gray-600 hover:text-gray-900">
                                        <i class="far fa-copy text-xs"></i>
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-center">1-11-2024 14:25</td>
                                <td class="py-3 px-4 text-center font-bold">Rp 28.000</td>
                                <td class="py-3 px-4 text-center">
                                    <span class="bg-red-700 text-white text-[10px] font-semibold rounded-md px-3 py-1 inline-block">Batal</span>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <td class="py-3 px-4 flex items-center space-x-3">
                                    <img src="https://storage.googleapis.com/a1aa/image/1fccaa95-6a3b-496f-525e-d923fba4e233.jpg" alt="Produk" class="w-10 h-10 rounded-sm flex-shrink-0" />
                                    <div>
                                        <p class="font-semibold leading-tight">Mobile Legends</p>
                                        <p class="text-gray-600 text-[9px] leading-tight">Weekly Diamond Pass</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center">087804135926</td>
                                <td class="py-3 px-4 text-center flex items-center justify-center space-x-1">
                                    <span>112233 - 1122</span>
                                    <button aria-label="Copy user ID" class="text-gray-600 hover:text-gray-900">
                                        <i class="far fa-copy text-xs"></i>
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-center">1-11-2024 14:25</td>
                                <td class="py-3 px-4 text-center font-bold">Rp 28.000</td>
                                <td class="py-3 px-4 text-center">
                                    <span class="bg-blue-600 text-white text-[10px] font-semibold rounded-md px-3 py-1 inline-block">Proses</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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
