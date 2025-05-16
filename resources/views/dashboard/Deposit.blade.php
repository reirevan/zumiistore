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
                            <a class="flex items-center gap-2 bg-[#f9d54a] text-black rounded-md px-3 py-2 text-[13px] font-semibold" href="#">
                                <i class="fas fa-credit-card text-[16px]"></i>
                                Deposit Saldo
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-2 text-[14px] font-normal hover:text-[#f9d54a]" href="{{ route('dashboard.riwayat') }}">
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
            <section class="bg-[#1f2437] rounded-xl flex-1 p-6 space-y-6 max-w-4xl">
                <!-- Saldo -->
                <div class="border border-[#4a4a4a] rounded-md p-3 text-white text-sm flex items-center space-x-3">
                    <span>Saldo Kamu:</span>
                    <i class="fas fa-wallet"></i>
                    <span class="font-semibold text-base">Rp782.000</span>
                </div>
                <!-- Form -->
                <form class="space-y-6">
                    <!-- Input Nominal -->
                    <div class="space-y-1">
                        <label for="nominal" class="block text-xs font-semibold text-[#c9c9c9]">Nominal Deposit</label>
                        <input id="nominal" type="text" placeholder="" class="w-full rounded-lg border border-[#4a4a4a] bg-[#f5f5f5] text-black text-sm py-3 px-4 focus:outline-none focus:ring-2 focus:ring-[#f9d54a]" />
                        <p class="text-[9px] text-[#6a6a6a]">Minimun Deposit Rp.20.000,-</p>
                    </div>

                    <!-- Payment Methods -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md mt-8">
                        <h2 class="text-lg font-semibold flex items-center">
                            Pilih Metode Pembayaran
                        </h2>

                        <!-- QRIS Section -->
                        <div class="bg-blue-100 p-4 rounded-lg mt-4">
                            <h2 class="font-semibold mb-2">QRIS</h2>
                            <div class="grid grid-cols-4 sm:grid-cols-7 gap-4 items-center">
                                <img src="{{ asset('storage/image/payment/qris.png') }}" class="h-10 w-auto object-contain" alt="QRIS logo" />
                                <img src="{{ asset('storage/image/payment/brimo.png') }}" class="h-10 w-auto object-contain" alt="BRI logo" />
                                <img src="{{ asset('storage/image/payment/bca.png') }}" class="h-10 w-auto object-contain" alt="BCA logo" />
                                <img src="{{ asset('storage/image/payment/gopay.png') }}" class="h-10 w-auto object-contain" alt="Gopay logo" />
                                <img src="{{ asset('storage/image/payment/dana.png') }}" class="h-10 w-auto object-contain" alt="DANA logo" />
                                <img src="{{ asset('storage/image/payment/shopeepay.png') }}" class="h-10 w-auto object-contain" alt="ShopeePay logo" />
                                <img src="{{ asset('storage/image/payment/ovo.png') }}" class="h-10 w-auto object-contain" alt="OVO logo" />
                            </div>
                        </div>

                        <!-- E-Wallet Section -->
                        <div class="bg-blue-100 p-4 rounded-lg mt-4 payment-category cursor-pointer" data-category="Transfer Bank">
                            <h2 class="font-semibold mb-2 flex justify-between items-center toggle-dropdown">
                                TRANSFER BANK 
                                <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                            </h2>
                            <div class="hidden flex-col space-y-2 mt-2 payment-options">
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="gopay">
                                    <div class="flex items-center space-x-2">
                                        <img alt="Gopay logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/gopay.png') }}"/>
                                        <span class="text-sm font-semibold">GOPAY</span>
                                    </div>
                                    <span class="text-sm text-gray-500" id="gopay-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="dana">
                                    <div class="flex items-center space-x-2">
                                        <img alt="DANA logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/dana.png') }}"/>
                                        <span class="text-sm font-semibold">DANA</span>
                                    </div>
                                    <span class="text-sm text-gray-500" id="dana-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="shopeepay">
                                    <div class="flex items-center space-x-2">
                                        <img alt="ShopeePay logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/shopeepay.png') }}"/>
                                        <span class="text-sm font-semibold">SHOPEEPAY</span>
                                    </div>
                                    <span class="text-sm text-gray-500" id="shopeepay-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="ovo">
                                    <div class="flex items-center space-x-2">
                                        <img alt="OVO logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/ovo.png') }}"/>
                                        <span class="text-sm font-semibold">OVO</span>
                                    </div>
                                    <span class="text-sm text-gray-500" id="ovo-price">Rp. 0</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Transfer Bank Section -->
                        <div class="bg-blue-100 p-4 rounded-lg mt-4 payment-category cursor-pointer" data-category="Transfer Bank">
                            <h2 class="font-semibold mb-2 flex justify-between items-center toggle-dropdown">
                                TRANSFER BANK 
                                <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                            </h2>
                            <div class="hidden flex-col space-y-2 mt-2 payment-options">
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="BCA">
                                    <div class="flex items-center space-x-2">
                                        <img alt="BCA logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/bca.png') }}"/>
                                        <span class="text-sm font-semibold">BCA</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="bca-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="BRI">
                                    <div class="flex items-center space-x-2">
                                        <img alt="BRI logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/bri.png') }}"/>
                                        <span class="text-sm font-semibold">BRI</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="bri-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="BNI">
                                    <div class="flex items-center space-x-2">
                                        <img alt="BNI logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/bni.png') }}"/>
                                        <span class="text-sm font-semibold">BNI</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="bni-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="BSI">
                                    <div class="flex items-center space-x-2">
                                        <img alt="BSI logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/bsi.png') }}"/>
                                        <span class="text-sm font-semibold">BSI</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="bsi-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="Bank Mandiri">
                                    <div class="flex items-center space-x-2">
                                        <img alt="Bank Mandiri logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/mandiri.png') }}"/>
                                        <span class="text-sm font-semibold">Bank Mandiri</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="mandiri-price">Rp. 0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Gerai Minimarket Section -->
                        <div class="bg-blue-100 p-4 rounded-lg mt-4 payment-category cursor-pointer" data-category="Gerai Minimarket">
                            <h2 class="font-semibold mb-2 flex justify-between items-center toggle-dropdown">
                                GERAI MINIMARKET
                                <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                            </h2>
                            <div class="hidden flex-col space-y-2 mt-2 payment-options">
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="Alfamart">
                                    <div class="flex items-center space-x-2">
                                        <img alt="Alfamart logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/alfamart.png') }}"/>
                                        <span class="text-sm font-semibold">Alfamart</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="Alfamart-price">Rp. 0</span>
                                </div>
                                <div class="payment-card flex items-center justify-between p-3 bg-white rounded-lg cursor-pointer" data-method="Indomaret">
                                    <div class="flex items-center space-x-2">
                                        <img alt="Indomaret logo" class="h-6 w-6 object-contain" src="{{ asset('storage/image/payment/Indomaret.png') }}"/>
                                        <span class="text-sm font-semibold">Indomaret</span>
                                    </div>
                                    <span class="text-sm text-gray-500 price-display" id="Indomaret-price">Rp. 0</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="w-full bg-[#f71f1f] text-white font-semibold py-3 rounded-md text-sm" type="submit">
                        Deposit
                    </button>
                </form>
            </section>
            </div>
        </div>
        <script>
            document.querySelectorAll(".payment-category").forEach(category => {
                let toggleButton = category.querySelector(".toggle-dropdown");
                let options = category.querySelector(".payment-options");
                let icon = category.querySelector("i");
        
                toggleButton.addEventListener("click", function(event) {
                    event.stopPropagation(); // Hindari trigger kategori utama
        
                    let isOpen = !options.classList.contains("hidden");
        
                    // Tutup semua kategori pembayaran lainnya
                    document.querySelectorAll(".payment-category").forEach(cat => {
                        let catOptions = cat.querySelector(".payment-options");
                        let catIcon = cat.querySelector("i");
        
                        if (cat !== category) {
                            catOptions.classList.add("hidden");
                            catIcon.classList.remove("rotate-180");
                            cat.classList.remove("selected");
                        }
                    });
        
                    // Toggle dropdown hanya pada kategori yang diklik
                    if (isOpen) {
                        options.classList.add("hidden");
                        icon.classList.remove("rotate-180");
                        category.classList.remove("selected");
                    } else {
                        options.classList.remove("hidden");
                        icon.classList.add("rotate-180");
                        category.classList.add("selected");
                    }
                });
            });
        
            document.querySelectorAll(".payment-card").forEach(card => {
                card.addEventListener("click", function(event) {
                    event.stopPropagation(); // Hindari trigger kategori utama
        
                    // Hilangkan warna biru dari semua pilihan
                    document.querySelectorAll(".payment-card").forEach(c => c.classList.remove("bg-blue-200"));
        
                    // Tambahkan warna biru ke pilihan yang diklik
                    this.classList.add("bg-blue-200");
                });
            });
        
            // Tutup dropdown e-wallet jika memilih metode pembayaran lain
            document.addEventListener("click", function(event) {
                document.querySelectorAll(".payment-category").forEach(category => {
                    let options = category.querySelector(".payment-options");
                    let icon = category.querySelector("i");
        
                    if (!category.contains(event.target)) {
                        options.classList.add("hidden");
                        icon.classList.remove("rotate-180");
                        category.classList.remove("selected");
                    }
                });
            });

            const paymentCards = document.querySelectorAll(".payment-card");
            paymentCards.forEach(card => {
                card.addEventListener("click", function () {
                    paymentCards.forEach(c => c.classList.remove("border-2", "border-green-500"));
                    this.classList.add("border-2", "border-green-500");
        
                    selectedPaymentMethod = this.getAttribute("data-method");
                });
            });

            document.getElementById("nominal").addEventListener("input", function(event) {
        const nominalValue = event.target.value.replace(/\D/g, ''); // Menghapus karakter non-numerik
        const nominalAmount = parseInt(nominalValue, 10);
        if (isNaN(nominalAmount)) return;

            // Memperbarui harga metode pembayaran
            document.getElementById("gopay-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("dana-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("shopeepay-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("ovo-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("bca-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("bri-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("bni-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("bsi-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("mandiri-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("Alfamart-price").innerText = `Rp. ${nominalAmount}`;
            document.getElementById("Indomaret-price").innerText = `Rp. ${nominalAmount}`;
        });
        </script>
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
