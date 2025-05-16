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
        *,
        *::before,
        *::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
        }
    
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
    
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
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
    
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
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
    
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }
    
        sub {
            bottom: -0.25em;
        }
    
        sup {
            top: -0.5em;
        }
    
        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }
    
        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }
    
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
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

        .custom-nav {
        width: 40px;
        height: 40px;
        background-color: rgba(255, 0, 0, 0.8); /* Warna merah */
        border-radius: 50%; /* Membentuk lingkaran */
        display: flex;
        align-items: center;
        justify-content: center;
        color: white !important; /* Warna ikon */
        font-size: 14px !important; /* Ukuran ikon lebih kecil */
        transition: background-color 0.3s ease;
    }
    [x-cloak] { display: none !important; }
    .custom-nav::after {
        font-size: 14px !important; /* Ukuran ikon */
    }

    .custom-nav:hover {
        background-color: rgba(200, 0, 0, 1); /* Warna merah lebih gelap saat hover */
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
    
        .flex {
            display: flex;
        }
    
        .grid {
            display: grid;
        }
    
        .hidden {
            display: none;
        }
    
        .aspect-video {
            aspect-ratio: 16 / 9;
        }
    
        .w-full {
            width: 100%;
        }
    
        .h-full {
            height: 100%;
        }
    
        .min-h-screen {
            min-height: 100vh;
        }
    
        .max-w-2xl {
            max-width: 42rem;
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

        <!-- Tailwind & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Dropdown User Toggle -->
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById("userDropdown");
            dropdown.classList.toggle("hidden");
        }

        document.addEventListener("click", function(event) {
            const dropdown = document.getElementById("userDropdown");
            const profile = document.querySelector(".cursor-pointer");

            if (!profile.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>

    <!-- Track Order Hover Toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const trackOrder = document.getElementById("track-order");
            if (trackOrder) {
                trackOrder.addEventListener("click", function (event) {
                    event.preventDefault();
                    this.classList.toggle("bg-gray-300");
                });
            }
        });
    </script>

    <!-- Swiper Initialization -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            new Swiper(".mySwiper", {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>
    <!-- Flash Sale Countdown Script -->
    <script>
        function startFlashSaleTimer() {
            const countdownElement = document.getElementById("countdown");
            const deadline = Date.now() + (8 * 60 * 60 * 1000); // ⏰ 8 jam = 8*60*60*1000 ms

            function updateTimer() {
                const now = Date.now();
                const timeLeft = Math.max(0, deadline - now);

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                countdownElement.innerHTML = 
                    `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                if (timeLeft > 0) {
                    requestAnimationFrame(updateTimer);
                } else {
                    countdownElement.innerHTML = "FLASH SALE BERAKHIR!";
                    countdownElement.classList.remove("text-black");
                    countdownElement.classList.add("text-gray-500");
                }
            }

            updateTimer();
        }

        document.addEventListener('DOMContentLoaded', startFlashSaleTimer);
    </script>

    <script>
        function activateTab(tab, sectionId) {
            // Reset semua tombol ke tampilan netral
            document.querySelectorAll('.tab').forEach(el => {
                el.classList.remove('bg-blue-500', 'text-white');
                el.classList.add('bg-white', 'text-black');
            });
      
            // Tambahkan class aktif ke tab yang diklik
            tab.classList.remove('bg-white', 'text-black');
            tab.classList.add('bg-blue-500', 'text-white');
      
            // Scroll otomatis ke bagian yang sesuai
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>
    <!-- Tab Navigation Activation -->
    <script>
        function activateTab(tab, sectionId) {
            document.querySelectorAll('.tab').forEach(el => {
                el.classList.remove('bg-blue-500', 'text-white');
                el.classList.add('bg-white', 'text-black');
            });

            tab.classList.remove('bg-white', 'text-black');
            tab.classList.add('bg-blue-500', 'text-white');

            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>

    <body class="bg-gray-200">
        <!-- Header -->
        @extends('layouts.app')

        @section('title', 'Zumii Store')
        
        @section('content')
            <!-- Header -->
        <header class="bg-white shadow-md" x-data="{ open: false }">
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

                    <!-- Auth Area -->
                    <div class="relative">
                        @auth
                            <!-- Greeting + Hamburger -->
                            <div @click="open = !open" class="flex items-center space-x-2 cursor-pointer min-w-[max-content]">
                                <span>Hallo,</span>
                                <span class="font-semibold text-red-500">{{ Auth::user()->name }}</span>
                                <i class="fas fa-bars text-xl"></i>
                            </div>
                            
                            <!-- Dropdown -->
                            <div x-show="open" x-transition @click.outside="open = false" x-cloak
                                class="absolute right-0 mt-4 bg-[#1f2136] rounded-3xl w-64 p-6 flex flex-col text-white z-50 shadow-xl">
                                
                                <div class="mb-5">
                                    <p class="text-base font-normal">{{ Auth::user()->name }}</p>
                                    <p class="text-yellow-400 font-semibold text-sm">Rp. <span class="text-yellow-500">23.000</span></p>
                                    <button class="mt-1 bg-gradient-to-b from-red-700 to-red-900 text-white text-sm font-semibold rounded-full px-6 py-1 shadow-md">
                                        Classic
                                    </button>
                                </div>

                                <hr class="border-gray-500 mb-5"/>

                                <nav class="flex flex-col space-y-5 font-semibold text-base">
                                    @if (Auth::guard('admin')->check()) <!-- Cek apakah admin yang login -->
                                        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                                            <i class="fas fa-tachometer-alt"></i>
                                            <span>Dashboard Admin</span>
                                        </a>
                                        <a href="{{ route('admin.logout') }}" class="flex items-center space-x-3">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout Admin</span>
                                        </a>
                                    @else <!-- Kalau user biasa yang login -->
                                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                                            <i class="fas fa-chart-bar"></i>
                                            <span>Dashboard Akun</span>
                                        </a>
                                        <a href="{{ route('dashboard.deposit') }}" class="flex items-center space-x-3">
                                            <i class="far fa-credit-card"></i>
                                            <span>Deposit Saldo</span>
                                        </a>
                                        <a href="{{ route('dashboard.riwayat') }}" class="flex items-center space-x-3">
                                            <i class="far fa-clipboard"></i>
                                            <span>Transaksi Saya</span>
                                        </a>
                                        <a href="{{ route('dashboard.savegame') }}" class="flex items-center space-x-3">
                                            <i class="far fa-save"></i>
                                            <span>Save ID</span>
                                        </a>
                                        <a href="{{ route('notifikasi') }}" class="flex items-center space-x-3">
                                            <i class="far fa-bell"></i>
                                            <span>Notifikasi</span>
                                        </a>
                                        <a href="{{ route('dashboard.pengaturan') }}" class="flex items-center space-x-3">
                                            <i class="fas fa-cog"></i>
                                            <span>Pengaturan Akun</span>
                                        </a>
                                    @endif
                                </nav>

                                <!-- Logout Button -->
                                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                                    @csrf
                                    <button type="submit" class="w-full bg-white text-red-600 font-semibold rounded-xl py-3 flex items-center justify-center space-x-2 hover:bg-gray-100 transition-colors">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Keluar</span>
                                    </button>
                                </form>
                            </div>
                        @else
                            <!-- Untuk Guest -->
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
<!-- Banner -->
<!-- Wrapper untuk Pusatkan Banner -->
<div class="flex justify-center w-full">
    <div class="swiper mySwiper relative max-w-[1200px]">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('storage/image/banner/banner01.png') }}" alt="Banner 1" class="w-[1200px] h-[300px] object-cover rounded-lg">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('storage/image/banner/banner02.png') }}" alt="Banner 2" class="w-[1200px] h-[300px] object-cover rounded-lg">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('storage/image/banner/banner03.png') }}" alt="Banner 3" class="w-[1200px] h-[300px] object-cover rounded-lg">
            </div>
        </div>

        <!-- Navigasi Slider -->
        <div class="swiper-button-prev custom-nav left-4"></div>
        <div class="swiper-button-next custom-nav right-4"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

    <!-- Penawaran Terbatas -->
    <section class="bg-gradient-to-b from-red-600 to-black">
        <div class="container mx-auto mt-8">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold text-white">
                        PENAWARAN TERBATAS <i class="fas fa-bolt"></i>
                    </h1>
                    <div id="flash-sale-timer" class="bg-yellow-500 text-black font-bold px-2 py-1 rounded">
                        Berakhir dalam <span id="countdown">00:00:00:00</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Produk Card -->
                    <div class="bg-white p-4 rounded-lg shadow text-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <img alt="Weekly Pass" class="w-full h-40 object-cover rounded-md" src="{{ asset('storage/image/product/mobile-legends.webp') }}" />
                        <h3 class="mt-2 text-[13px] font-bold truncate" title="Weekly Pass">Weekly Pass</h3>
                        <p class="text-gray-500 text-sm line-through">Rp 20.000</p>
                        <p class="text-red-500 font-bold text-sm">Rp 15.000</p>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow text-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <img alt="Blessing of the Welkin Moon" class="w-full h-40 object-cover rounded-md" src="{{ asset('storage/image/product/genshin-impact.webp') }}" />
                        <h3 class="mt-2 text-[13px] font-bold truncate" title="Blessing of the Welkin Moon">Blessing of the Welkin Moon</h3>
                        <p class="text-gray-500 text-sm line-through">Rp 70.000</p>
                        <p class="text-red-500 font-bold text-sm">Rp 64.200</p>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow text-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <img alt="Member Mingguan" class="w-full h-40 object-cover rounded-md" src="{{ asset('storage/image/product/free-fire.webp') }}" />
                        <h3 class="mt-2 text-[13px] font-bold truncate" title="Member Mingguan">Member Mingguan</h3>
                        <p class="text-gray-500 text-sm line-through">Rp 20.000</p>
                        <p class="text-red-500 font-bold text-sm">Rp 15.000</p>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow text-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <img alt="Member Mingguan" class="w-full h-40 object-cover rounded-md" src="{{ asset('storage/image/product/free-fire.webp') }}" />
                        <h3 class="mt-2 text-[13px] font-bold truncate" title="Member Mingguan">Member Mingguan</h3>
                        <p class="text-gray-500 text-sm line-through">Rp 20.000</p>
                        <p class="text-red-500 font-bold text-sm">Rp 15.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rekomendasi Game Terlaris -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Rekomendasi Game Terlaris</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Mobile Legends: Bang Bang" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/NOWRJL4Z8uFl4YaQbQCSuxSgFIIQiObVqSxQeQnnTFY.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Mobile Legends: Bang Bang">Mobile Legends: Bang Bang</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Genshin Impact" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/rGiYY0nt12Yc5hSG63q3vn7mvCa2uL2kr6GxcxdGfr4.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Genshin Impact">Genshin Impact</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Magic Chess: Go Go" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/0qHFZfg69ZdhfENl7h0AM5uUdnF0LZaD81vW8Zg009U.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Magic Chess: Go Go">Magic Chess: Go Go</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Valorant" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/cP4l22aRjpD_rF8Vl9G2yBE6wckM3q4C1LRSgOWrVOA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Valorant">Valorant</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Point Blank" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/20PT6bH9HMb6Q5mUg-a_Bf92F3SZdbqn5I-QA7dGMRU.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Point Blank">Point Blank</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Honor of Kings" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RAPXqrjLwKWUl00eZaUyk15P3cuH79cG_HYDCrs3D5Q.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Honor of Kings">Honor of Kings</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

        </div>
    </section>

    <!-- Layanan Game -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">LAYANAN GAME</h2>
        <div class="flex space-x-4">
            <button id="all-games" class="tab bg-white text-black border border-gray-300 px-4 py-2 rounded-md flex items-center space-x-2" onclick="activateTab(this, 'all-section')">
                <i class="fas fa-gamepad"></i>
                <span>SEMUA GAME</span>
            </button>
            <button id="mobile-games" class="tab bg-white text-black border border-gray-300 px-4 py-2 rounded-md flex items-center space-x-2" onclick="activateTab(this, 'mobile-section')">
                <i class="fas fa-mobile-alt"></i>
                <span>MOBILE</span>
            </button>
            <button id="pc-games" class="tab bg-white text-black border border-gray-300 px-4 py-2 rounded-md flex items-center space-x-2" onclick="activateTab(this, 'pc-section')">
                <i class="fas fa-desktop"></i>
                <span>PC</span>
            </button>
            <button id="vouchers" class="tab bg-white text-black border border-gray-300 px-4 py-2 rounded-md flex items-center space-x-2" onclick="activateTab(this, 'voucher-section')">
                <i class="fas fa-ticket-alt"></i>
                <span>VOUCHER</span>
            </button>
        </div>
    </section>

    <!-- Semua Game -->
    <section class="mt-8">
        <div id="all-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4">
            <h2>SEMUA GAME</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

            <!-- Template Kartu -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Garena Shell">Garena Shell</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Steam Voucher">Steam Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

        </div>
    </section>

    <!-- MOBILE -->
    <section class="mt-8">
        <div id="mobile-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4">
            <h2>MOBILE</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

            <!-- MOBILE LEGENDS -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Mobile Legends Game" class="w-full h-40 object-cover rounded-md" src="{{ asset('storage/image/product/mobile-legends.webp') }}" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Mobile Legends">Mobile Legends</h3>
                <form action="{{ route('mobile-legends') }}" method="GET">
                    <button type="submit" class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">
                        TOP-UP
                    </button>
                </form>
            </div>

            <!-- STEAM -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Steam Voucher">Steam Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <!-- MINECRAFT -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <!-- ROBLOX -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <!-- PSN -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

            <!-- GOOGLE PLAY -->
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg text-sm">TOP-UP</button>
            </div>

        </div>
    </section>

    <!-- PC -->
    <section class="mt-8">
        <div id="pc-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4">
            <h2>GAME PC</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Garena Shell">Garena Shell</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Steam Voucher">Steam Voucher</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" />
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
        </div>
    </section>

    <!-- VOUCHER -->
    <section class="mt-8">
        <div id="voucher-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4">
            <h2>VOUCHER GAME/ENTERTAINMENT</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg"/>
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Garena Shell">Garena Shell</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg"/>
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Steam Voucher">Steam Voucher</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg"/>
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Minecraft">Minecraft</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg"/>
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Roblox Voucher">Roblox Voucher</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg"/>
                <h3 class="mt-2 text-[13px] font-bold truncate" title="PSN Voucher">PSN Voucher</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg"/>
                <h3 class="mt-2 text-[13px] font-bold truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</h3>
                <button class="mt-2 bg-red-500 text-white w-full py-2 rounded-md text-sm">TOP-UP</button>
            </div>
        </div>
    </section>
<br>
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
