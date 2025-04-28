<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mobile Legends</title>
        <link rel="icon" type="image/png" href="{{ asset('storage/image/logo/Logo_3.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        

        <!-- Styles / Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
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
            
        @endif
    </head>
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
      
        <!-- Main Content -->
        <main class="container mx-auto mt-6 px-6 center">
            <div class="max-w-5xl mx-auto p-4">
                <!-- Product Information -->
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row">
                    <img src="{{ asset('storage/image/product/mobile-legends.webp') }}" 
                         alt="Mobile Legends: Bang Bang cover image" 
                         class="w-36 h-36 rounded-lg">
                    
                    <div class="md:ml-6 mt-4 md:mt-0 flex-1">
                        <h1 class="text-2xl font-bold">Mobile Legends: Bang Bang</h1>
                        <p class="text-gray-600">Moonton</p>
                
                        <div class="mt-4">
                            <h2 class="text-lg font-semibold">Variasi Produk</h2>
                            <div class="flex space-x-4 mt-2">
                                <button class="bg-yellow-400 text-white px-4 py-2 rounded-lg flex items-center">
                                    <i class="fas fa-gem mr-2"></i> Diamonds
                                </button>
                                <button class="bg-yellow-400 text-white px-4 py-2 rounded-lg flex items-center">
                                    <i class="fas fa-ticket-alt mr-2"></i> Weekly Pass
                                </button>
                            </div>
                        </div>
                    </div>
                
                    <div class="mt-4 md:mt-0 md:ml-6 flex-1">
                        <h2 class="text-lg font-semibold">Deskripsi</h2>
                        <p class="text-gray-600 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ea 
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                            nulla pariatur.
                        </p>
                    </div>
                </div>

<!-- Steps Section -->
<div class="mt-8 text-center">
    <h2 class="text-xl font-bold">Cara Melakukan Pemesanan</h2>
    <div class="flex justify-center mt-4 space-x-4">
        <div class="w-10 h-10 bg-yellow-400 text-white rounded-full flex items-center justify-center">1</div>
        <div class="w-10 h-10 bg-yellow-400 text-white rounded-full flex items-center justify-center">2</div>
        <div class="w-10 h-10 bg-yellow-400 text-white rounded-full flex items-center justify-center">3</div>
        <div class="w-10 h-10 bg-yellow-400 text-white rounded-full flex items-center justify-center">4</div>
        <div class="w-10 h-10 bg-yellow-400 text-white rounded-full flex items-center justify-center">5</div>
    </div>
</div>

<!-- Account Data -->
<div class="bg-white p-6 rounded-lg shadow-md mt-8">
    <h2 class="text-lg font-semibold flex items-center">
        <div class="w-8 h-8 bg-yellow-400 text-white rounded-full flex items-center justify-center mr-2">
            1
        </div>
        Masukkan Data Akun
    </h2>

    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700" for="user-id">User ID</label>
            <input class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition" 
                id="user-id" placeholder="Masukkan User ID Akun" type="text"/>
        </div>
        <div>
            <label class="block text-gray-700" for="server-zone">Server Game</label>
            <input class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition" 
                id="server-zone" placeholder="Zone ID" type="text"/>
        </div>
        <div>
            <label class="block text-gray-700" for="phone-number">Nomor HP</label>
            <input class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition" 
                id="phone-number" placeholder="Masukkan Nomor HP" type="text"/>
        </div>
    </div>

    <!-- Checkbox Simpan ID Akun (Hanya Muncul Saat Login) -->
    @auth
    <div class="mt-4 flex items-center">
        <input type="checkbox" id="save-account" class="mr-2">
        <label for="save-account" class="text-gray-700">Simpan ID Akun Game</label>
    </div>
    @endauth
</div>

<!-- Product Variants -->
<div class="bg-white p-6 rounded-lg shadow-md mt-8">
    <h2 class="text-lg font-semibold flex items-center">
        <div class="w-8 h-8 bg-yellow-400 text-white rounded-full flex items-center justify-center mr-2">
            2
        </div>
        Pilih Varian Produk
    </h2>
    <div class="mt-4">
        <h3 class="text-md font-semibold">WEEKLY PASS</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            @php
                $weeklyVariants = [
                    1 => 27000,
                    2 => 54000,
                    3 => 81000,
                    4 => 108000,
                    5 => 135000,
                    10 => 270000
                ];
            @endphp
    
            @foreach ($weeklyVariants as $weeks => $price)
                <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                    data-variant="weekly{{ $weeks }}" data-price="{{ $price }}">
                    <div class="text-left">
                        <p class="font-semibold">Weekly Pass x{{ $weeks }}</p>
                        <p class="text-gray-600">({{ $weeks }} Minggu)</p>
                        <p class="text-gray-600">Rp. {{ number_format($price, 0, ',', '.') }}</p>
                    </div>
                    <img alt="Weekly Pass image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Weekly-Pass.png') }}"/>
                </div>
            @endforeach
        </div>    
    </div>
    
    
    <div class="mt-4">
        <h3 class="text-md font-semibold">DIAMONDS</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            <!-- Data dummy dari 14 diamond sampai 18.576 diamond -->
            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond14" data-price="3000">
                <div class="text-left">
                    <p class="font-semibold">14 Diamonds</p>
                    <p class="text-gray-600">Rp.3.000</p>
                </div>
                <img alt="14 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>
    
            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond28" data-price="7000">
                <div class="text-left">
                    <p class="font-semibold">28 Diamonds</p>
                    <p class="text-gray-600">Rp.7.000</p>
                </div>
                <img alt="28 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>
    
            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond86" data-price="22000">
                <div class="text-left">
                    <p class="font-semibold">86 Diamonds</p>
                    <p class="text-gray-600">(78+8 Bonus)</p>
                    <p class="text-gray-600">Rp.22.000</p>
                </div>
                <img alt="86 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>

            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond140" data-price="27000">
                <div class="text-left">
                    <p class="font-semibold">140 Diamonds</p>
                    <p class="text-gray-600">(127+13 Bonus)</p>
                    <p class="text-gray-600">Rp.27.000</p>
                </div>
                <img alt="140 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>
            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond172" data-price="42000">
                <div class="text-left">
                    <p class="font-semibold">172 Diamonds</p>
                    <p class="text-gray-600">(156+16 Bonus)</p>
                    <p class="text-gray-600">Rp.42.000</p>
                </div>
                <img alt="172 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>
            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond257" data-price="62000">
                <div class="text-left">
                    <p class="font-semibold">257 Diamonds</p>
                    <p class="text-gray-600">(234+23 Bonus)</p>
                    <p class="text-gray-600">Rp.62.000</p>
                </div>
                <img alt="257 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>
            <div class="variant-card bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center cursor-pointer" 
                data-variant="diamond284" data-price="70000">
                <div class="text-left">
                    <p class="font-semibold">284 Diamonds</p>
                    <p class="text-gray-600">(234+23 Bonus)</p>
                    <p class="text-gray-600">Rp.70.000</p>
                </div>
                <img alt="284 Diamonds image" class="w-12 h-12" src="{{ asset('storage/image/icon-product/Clear-Diamonds.png') }}"/>
            </div>
        </div>
    </div>    
</div>

<!-- Payment Methods -->
<div class="bg-gray-100 p-6 rounded-lg shadow-md mt-8">
    <h2 class="text-lg font-semibold flex items-center">
        <div class="w-8 h-8 bg-yellow-400 text-white rounded-full flex items-center justify-center mr-2">
            3
        </div>
        Pilih Metode Pembayaran
    </h2>
    <!-- QRIS Section -->
    <div class="bg-blue-100 p-4 rounded-lg mt-4">
        <h2 class="font-semibold mb-2">QRIS</h2>
        <div class="grid grid-cols-4 sm:grid-cols-7 gap-4 items-center">
            <img alt="QRIS logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/qris.png') }}"/>
            <img alt="BRI logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/brimo.png') }}"/>
            <img alt="BCA logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/bca.png') }}"/>
            <img alt="Gopay logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/gopay.png') }}"/>
            <img alt="DANA logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/dana.png') }}"/>
            <img alt="ShopeePay logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/shopeepay.png') }}"/>
            <img alt="OVO logo" class="h-10 w-auto object-contain" src="{{ asset('storage/image/payment/ovo.png') }}"/>
        </div>
    </div>

    <!-- E-Wallet Section -->
    <div class="bg-blue-100 p-4 rounded-lg mt-4 payment-category cursor-pointer" data-category="ewallet">
        <h2 class="font-semibold mb-2 flex justify-between items-center toggle-dropdown">
            E-WALLET 
            <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
        </h2>
        <div class="hidden flex flex-col space-y-2 mt-2 payment-options">
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
        <div class="hidden flex flex-col space-y-2 mt-2 payment-options">
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
        <div class="hidden flex flex-col space-y-2 mt-2 payment-options">
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

<!-- Payment Summary -->
<div class="bg-white p-6 rounded-lg shadow-md mt-8">
    <h2 class="text-lg font-semibold flex items-center">
        <div class="w-8 h-8 bg-yellow-400 text-white rounded-full flex items-center justify-center mr-2">4</div>
        Lakukan Pembayaran
    </h2>

    <!-- Product Details -->
    <div class="mt-4 flex items-center justify-between">
        <div class="flex items-center">
            <img id="productImage" alt="Product image" class="w-12 h-12" src="https://placehold.co/50x50"/>
            <div class="ml-4">
                <p id="productName" class="font-semibold">Pilih Produk</p>
                <p id="paymentMethod" class="text-gray-600">Pilih Metode Pembayaran</p>
                <p id="productPrice" class="text-gray-600">Rp. 0,-</p>
            </div>
        </div>

        <!-- Quantity Selector -->
        <div class="flex flex-col items-center">
            <div class="flex items-center">
                <button id="decreaseQty" class="bg-gray-200 text-gray-600 px-2 py-1 rounded-lg">-</button>
                <span id="qtyValue" class="mx-2">1</span>
                <button id="increaseQty" class="bg-gray-200 text-gray-600 px-2 py-1 rounded-lg">+</button>
            </div>
            <p id="totalPrice" class="font-semibold mt-2">Rp. 0,-</p>
        </div>
    </div>
</div>
<div>
    <button id="openPopup" type="button" class="bg-red-500 text-white w-full py-3 rounded-lg text-lg font-semibold mt-8">
        Beli
    </button>    
</div>

    <!-- Pop-up -->
    <div id="popupContainer" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full relative">
            <h2 class="text-center text-xl font-semibold mb-4">Detail Pesanan</h2>
            <p class="text-center text-sm mb-4">Mohon periksa kembali pesanan kamu sebelum melanjutkan Pembelian</p>
            <hr class="border-dashed mb-4">
    
            <form id="formPemesanan" method="POST" action="{{ route('order.store') }}">
                @csrf
                <!-- Hidden input -->
                <input type="hidden" name="game_user_id"   id="inputGameUserId">
                <input type="hidden" name="server_id"      id="inputServerId">
                <input type="hidden" name="nickname"       id="inputNickname">
                <input type="hidden" name="product_id"     id="inputProductId">
                <input type="hidden" name="payment_method" id="inputPaymentMethod">
                <input type="hidden" name="phone_number"   id="inputPhone">
                <input type="hidden" name="quantity"       id="inputQty">
    
                <!-- Informasi pesanan -->
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">User ID / Server</span>
                    <span id="popupUserID">-</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">Nickname</span>
                    <span id="popupNickname">-</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span class="font-semibold">Nomor HP</span>
                    <span id="popupPhone">-</span>
                </div>
                <hr class="border-dashed mb-4">
    
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">Produk</span>
                    <span id="popupProduct">-</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">Harga</span>
                    <span id="popupPrice">-</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span class="font-semibold">Metode Bayar</span>
                    <span id="popupPayment">-</span>
                </div>
    
                <p class="text-center text-xs mb-4">
                    Dengan melakukan pembelian ini, Anda telah menyetujui
                    <a href="#" class="text-blue-500 font-semibold">Syarat & Ketentuan</a> dan
                    <a href="#" class="text-blue-500 font-semibold">Kebijakan Privasi</a> yang berlaku.
                </p>
    
                <div class="flex justify-between">
                    <button type="button" id="cancelOrder" class="bg-gray-500 text-white font-semibold py-2 px-4 rounded">
                        Batal
                    </button>
                    <button type="submit" id="confirmOrder" class="bg-red-500 text-white font-semibold py-2 px-4 rounded">
                        Beli
                    </button>
                </div>
            </form>       
        </div>
    </div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".variant-card").forEach(function(card) {
                card.addEventListener("click", function() {
                    let selectedPrice = this.getAttribute("data-price");
    
                    console.log("Harga yang dipilih:", selectedPrice); // Debugging
    
                    // Pastikan harga dalam format Rupiah
                    let formattedPrice = formatRupiah(selectedPrice);
    
                    document.getElementById("gopay-price").innerText = formattedPrice;
                    document.getElementById("dana-price").innerText = formattedPrice;
                    document.getElementById("shopeepay-price").innerText = formattedPrice;
                    document.getElementById("ovo-price").innerText = formattedPrice;
                });
            });
        });
    
        function formatRupiah(value) {
            value = value.toString().replace(/[^\d]/g, ""); // Hanya angka
            return "Rp. " + new Intl.NumberFormat("id-ID").format(value);
        }
    </script>
    
    <script>
        document.querySelectorAll('.variant-card').forEach(card => {
            card.addEventListener('click', function () {
                document.querySelectorAll('.variant-card').forEach(el => el.classList.remove('border-2', 'border-blue-500'));
                this.classList.add('border-2', 'border-blue-500');
            });
        });
    </script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let selectedPrice = 0;
            
            document.querySelectorAll(".variant-card").forEach(function(option) {
                option.addEventListener("click", function() {
                    selectedPrice = parseInt(this.getAttribute("data-price"));
                    
                    document.querySelectorAll(".price-display").forEach(function(priceElement) {
                        priceElement.innerText = `Rp. ${selectedPrice.toLocaleString('id-ID')}`;
                    });
                });
            });
        });
    </script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let selectedPrice = 0;
            const adminFee = 5000; // Biaya admin Rp. 5.000 untuk gerai minimarket
    
            // Ambil elemen harga dari metode pembayaran
            const alfamartPrice = document.getElementById("Alfamart-price");
            const indomaretPrice = document.getElementById("Indomaret-price");
    
            // Saat pengguna memilih variasi produk
            document.querySelectorAll(".variant-card").forEach(function(option) {
                option.addEventListener("click", function() {
                    selectedPrice = parseInt(this.getAttribute("data-price")); // Ambil harga dari produk yang dipilih
                    updatePrices();
                });
            });
    
            function updatePrices() {
                if (selectedPrice > 0) {
                    let finalPrice = selectedPrice + adminFee; // Tambahkan biaya admin
    
                    alfamartPrice.innerText = `Rp. ${finalPrice.toLocaleString('id-ID')} (Admin Rp. 5.000)`;
                    indomaretPrice.innerText = `Rp. ${finalPrice.toLocaleString('id-ID')} (Admin Rp. 5.000)`;
                } else {
                    alfamartPrice.innerText = "Rp. 0";
                    indomaretPrice.innerText = "Rp. 0";
                }
            }
        });
    </script>
    
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
    </script>
    
    <script>
    document.querySelectorAll('.bg-blue-100').forEach(method => {
        method.addEventListener('click', function () {
            document.querySelectorAll('.bg-blue-100').forEach(el => el.classList.remove('border-2', 'border-blue-500'));
            this.classList.add('border-2', 'border-blue-500');
        });
    });
    </script>
    
    <script>
        // Inisialisasi qty dan harga satuan
        let qty = 1;
        const pricePerItem = 1500;
    
        // Ambil elemen HTML
        const qtyValue = document.getElementById("qtyValue");
        const totalPrice = document.getElementById("totalPrice");
        const decreaseQty = document.getElementById("decreaseQty");
        const increaseQty = document.getElementById("increaseQty");
    
        // Fungsi untuk memperbarui tampilan qty dan total harga
        function updateDisplay() {
            qtyValue.textContent = qty;
            totalPrice.textContent = `Rp. ${new Intl.NumberFormat("id-ID").format(qty * pricePerItem)},-`;
        }
    
        // Event listener untuk tombol "-"
        decreaseQty.addEventListener("click", () => {
            if (qty > 1) {
                qty--;
                updateDisplay();
            }
        });
    
        // Event listener untuk tombol "+"
        increaseQty.addEventListener("click", () => {
            qty++;
            updateDisplay();
        });
    </script>

    <script>
        let selectedProduct = {
            name: "",
            price: 0,
            image: "",
            paymentMethod: ""
        };
        
        let quantity = 1;

        // Update tampilan Payment Summary
        function updateSummary() {
            document.getElementById("productName").textContent = selectedProduct.name || "Pilih Produk";
            document.getElementById("paymentMethod").textContent = selectedProduct.paymentMethod || "Pilih Metode Pembayaran";
            document.getElementById("productPrice").textContent = `Rp. ${selectedProduct.price.toLocaleString()},-`;
            document.getElementById("productImage").src = selectedProduct.image || "https://placehold.co/50x50";
            document.getElementById("totalPrice").textContent = `Rp. ${(selectedProduct.price * quantity).toLocaleString()},-`;
        }

        // Pilih variasi produk
        document.querySelectorAll(".variant-card").forEach(card => {
            card.addEventListener("click", function() {
                selectedProduct.name = this.querySelector(".font-semibold").textContent;
                selectedProduct.price = parseInt(this.getAttribute("data-price"));
                selectedProduct.image = this.querySelector("img").src;
                updateSummary();
            });
        });

        // Pilih metode pembayaran
        document.querySelectorAll(".payment-method").forEach(method => {
            method.addEventListener("click", function() {
                selectedProduct.paymentMethod = this.getAttribute("data-method");
                updateSummary();
            });
        });

        // Ubah jumlah produk
        document.getElementById("increaseQty").addEventListener("click", function() {
            quantity++;
            document.getElementById("qtyValue").textContent = quantity;
            updateSummary();
        });

        document.getElementById("decreaseQty").addEventListener("click", function() {
            if (quantity > 1) {
                quantity--;
                document.getElementById("qtyValue").textContent = quantity;
                updateSummary();
            }
        });

        // Inisialisasi pertama kali
        updateSummary();
    </script>

{{-- <---DONE MENAMPILKAN USER ID-SERVERNYA-->> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openPopupBtn = document.getElementById("openPopup");
            const popupContainer = document.getElementById("popupContainer");
            const cancelOrderBtn = document.getElementById("cancelOrder");
            const form = document.getElementById("formPemesanan");
        
            const userIDInput = document.getElementById("user-id");
            const serverIDInput = document.getElementById("server-zone");
            const phoneInput = document.getElementById("phone-number");
        
            const popupUserID = document.getElementById("popupUserID");
            const popupPhone = document.getElementById("popupPhone");
            const popupProduct = document.getElementById("popupProduct");
            const popupPrice = document.getElementById("popupPrice");
            const popupPayment = document.getElementById("popupPayment");
            const popupNickname = document.getElementById("popupNickname");
        
            const inputGameUserId = document.getElementById("inputGameUserId");
            const inputServerId = document.getElementById("inputServerId");
            const inputNickname = document.getElementById("inputNickname");
            const inputProductId = document.getElementById("inputProductId");
            const inputPaymentMethod = document.getElementById("inputPaymentMethod");
            const inputPhone = document.getElementById("inputPhone");
            const inputQty = document.getElementById("inputQty");
        
            let selectedProduct = null;
            let selectedPaymentMethod = null;
            let quantity = 1;
        
            const totalPriceElement = document.getElementById("popupPrice"); // Ini yang diupdate
        
            const variantCards = document.querySelectorAll(".variant-card");
            variantCards.forEach(card => {
                card.addEventListener("click", function () {
                    variantCards.forEach(c => c.classList.remove("border-2", "border-blue-500"));
                    this.classList.add("border-2", "border-blue-500");
        
                    selectedProduct = {
                        id: this.getAttribute("data-id"),
                        name: this.getAttribute("data-variant"),
                        price: parseInt(this.getAttribute("data-price"), 10),
                    };
                    updateTotalPrice();
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
        
            function updateTotalPrice() {
                if (selectedProduct) {
                    const total = selectedProduct.price * quantity;
                    totalPriceElement.textContent = new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR",
                    }).format(total);
                }
            }
        
            const increaseQtyBtn = document.getElementById("increaseQty");
            const decreaseQtyBtn = document.getElementById("decreaseQty");
            const qtyValueElement = document.getElementById("qtyValue");
        
            if (increaseQtyBtn && decreaseQtyBtn && qtyValueElement) {
                increaseQtyBtn.addEventListener("click", function () {
                    quantity++;
                    qtyValueElement.textContent = quantity;
                    updateTotalPrice();
                });
        
                decreaseQtyBtn.addEventListener("click", function () {
                    if (quantity > 1) {
                        quantity--;
                        qtyValueElement.textContent = quantity;
                        updateTotalPrice();
                    }
                });
            }
        
            openPopupBtn.addEventListener("click", function () {
                const userID = userIDInput.value.trim();
                const serverID = serverIDInput.value.trim();
                const phoneNumber = phoneInput.value.trim();
        
                if (!userID || !serverID) {
                    alert("⚠️ Silakan isi User ID dan Server terlebih dahulu!");
                    return;
                }
                if (!selectedProduct) {
                    alert("⚠️ Silakan pilih varian produk terlebih dahulu!");
                    return;
                }
                if (!selectedPaymentMethod) {
                    alert("⚠️ Silakan pilih metode pembayaran terlebih dahulu!");
                    return;
                }
        
                fetch(`/get-nickname?user_id=${userID}&server_id=${serverID}`)
                    .then(response => response.json())
                    .then(data => {
                        const nickname = data.status === "success" ? data.nickname : "Tidak ditemukan";
                        popupNickname.textContent = nickname;
                        inputNickname.value = nickname;
        
                        popupUserID.textContent = `${userID} / ${serverID}`;
                        popupPhone.textContent = phoneNumber || "-";
                        popupProduct.textContent = selectedProduct.name;
                        popupPayment.textContent = selectedPaymentMethod;
        
                        inputGameUserId.value = userID;
                        inputServerId.value = serverID;
                        inputProductId.value = selectedProduct.id;
                        inputPaymentMethod.value = selectedPaymentMethod;
                        inputPhone.value = phoneNumber;
                        inputQty.value = quantity;
        
                        popupContainer.classList.remove("hidden");
                    })
                    .catch(error => {
                        console.error("Error fetching nickname:", error);
                        popupNickname.textContent = "Error";
                    });
            });
        
            cancelOrderBtn.addEventListener("click", () => {
                popupContainer.classList.add("hidden");
            });

            document.getElementById("confirmOrder").addEventListener("click", function (e) {
                e.preventDefault();
                const orderData = {
                    userID: document.getElementById("popupUserID").textContent,
                    nickname: document.getElementById("popupNickname").textContent,
                    phone: document.getElementById("popupPhone").textContent,
                    product: document.getElementById("popupProduct").textContent,
                    price: document.getElementById("popupPrice").textContent,
                    paymentMethod: document.getElementById("popupPayment").textContent,
                };
                localStorage.setItem("transferBankOrder", JSON.stringify(orderData));
                window.location.href = "{{ route('payment.transfer-bank') }}";
            });
                    
            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape") {
                    popupContainer.classList.add("hidden");
                }
            });
        });
    </script>
                  

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const orderData = JSON.parse(localStorage.getItem("transferBankOrder"));
        if (orderData) {
            document.getElementById("tbUserID").textContent = orderData.userID;
            document.getElementById("tbNickname").textContent = orderData.nickname;
            document.getElementById("tbPhone").textContent = orderData.phone;
            document.getElementById("tbProduct").textContent = orderData.product;
            document.getElementById("tbPrice").textContent = orderData.price;
            document.getElementById("tbPayment").textContent = orderData.paymentMethod;
        }
    });
</script>
    
</main>
        <footer class="bg-gray-900 text-white">
            <div class="container mx-auto py-12">
                <div class="flex flex-col md:flex-row justify-between items-start mb-8">
                    <!-- Logo dan Deskripsi -->
                    <div class="w-full md:w-1/3 text-left">
                        <img alt="Zumii Store logo" class="mb-4" height="150" 
                             src="{{ asset('storage/image/logo/Logo_3.png') }}" width="150"/>
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
                <p class="text-center text-gray-500">COPYRIGHT © 2025 ZUMII STORE</p>
            </div>
        </footer>
    </body>
</html>