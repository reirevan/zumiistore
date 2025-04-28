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
        
        <script>
            function toggleDropdown() {
                document.getElementById('userDropdown').classList.toggle('hidden');
            }
        </script>
        
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("userDropdown");
            dropdown.classList.toggle("hidden");
        }
        
        // Tutup dropdown jika klik di luar
        document.addEventListener("click", function(event) {
            var dropdown = document.getElementById("userDropdown");
            var profile = document.querySelector(".cursor-pointer");
        
            if (!profile.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>        
    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const trackOrder = document.getElementById("track-order");
            trackOrder.addEventListener("click", function (event) {
                event.preventDefault(); // Menghentikan navigasi jika diperlukan
                this.classList.toggle("bg-gray-300"); // Toggle efek hover ketika diklik
            });
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <!-- Script SwiperJS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".mySwiper", {
                loop: true, // Mengaktifkan loop agar bisa terus berputar
                autoplay: {
                    delay: 5000, // Banner berpindah otomatis setiap 5 detik
                    disableOnInteraction: false, // Tetap autoplay setelah user berinteraksi
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true, // Agar pagination bisa diklik
                },
            });
        });
    </script>
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
            <!-- Timer berada di atas kartu produk -->
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold text-white">
                        PENAWARAN TERBATAS
                        <i class="fas fa-bolt"></i>
                    </h1>
                    <div id="flash-sale-timer" class="bg-yellow-500 text-black font-bold px-2 py-1 rounded">
                        Berakhir dalam <span id="countdown">00:00:00:00</span>
                    </div>
                </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-100 p-4 rounded-md shadow-md text-black ">
                    <img alt="Weekly Pass" class="w-full h-40 object-cover rounded-md" height="250" weight="175"
                    src="{{ asset('storage/image/product/mobile-legends.webp') }}"/>
                    <div class="mt-2">
                        <h3 class="text-lg font-bold">Weekly Pass</h3>
                        <p class="text-gray-500">Rp 20.000</p>
                        <p class="text-red-500 font-bold">Rp 15.000</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-md shadow-md">
                    <img alt="Blessing of the Welkin Moon" class="w-full h-40 object-cover rounded-md" height="250" weight="175"
                    src="{{ asset('storage/image/product/genshin-impact.webp') }}" />
                    <div class="mt-2">
                        <h3 class="text-lg font-bold">Blessing of the Welkin Moon</h3>
                        <p class="text-gray-500">Rp 70.000</p>
                        <p class="text-red-500 font-bold">Rp 64.200</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-md shadow-md">
                    <img alt="Member Mingguan" class="w-full h-40 object-cover rounded-md" height="250" weight="175"
                    src="{{ asset('storage/image/product/free-fire.webp') }}" />
                    <div class="mt-2">
                        <h3 class="text-lg font-bold">Member Mingguan</h3>
                        <p class="text-gray-500">Rp 20.000</p>
                        <p class="text-red-500 font-bold">Rp 15.000</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-md shadow-md">
                    <img alt="Member Mingguan" class="w-full h-40 object-cover rounded-md" height="250" weight="175"
                    src="{{ asset('storage/image/product/free-fire.webp') }}" />
                    <div class="mt-2">
                        <h3 class="text-lg font-bold">Member Mingguan</h3>
                        <p class="text-gray-500">Rp 20.000</p>
                        <p class="text-red-500 font-bold">Rp 15.000</p>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <script>
        function startFlashSaleTimer(duration) {
            let countdownElement = document.getElementById("countdown");
            let endTime = Date.now() + duration;
    
            function updateTimer() {
                let now = Date.now();
                let timeLeft = Math.max(0, endTime - now);
    
                let hours = Math.floor(timeLeft / (1000 * 60 * 60));
                let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    
                countdownElement.innerHTML = `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    
                if (timeLeft > 0) {
                    requestAnimationFrame(updateTimer);
                } else {
                    countdownElement.innerHTML = "FLASH SALE BERAKHIR!";
                }
            }        
            updateTimer();
        }  
        // Misalnya Flash Sale berlangsung selama 1 hari (86400000 ms)
        startFlashSaleTimer(86400000);
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
    <!-- Rekomendasi Game Terlaris -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Rekomendasi Game Terlaris</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Mobile Legends: Bang Bang" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/NOWRJL4Z8uFl4YaQbQCSuxSgFIIQiObVqSxQeQnnTFY.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Mobile Legends: Bang Bang</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Genshin Impact" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/rGiYY0nt12Yc5hSG63q3vn7mvCa2uL2kr6GxcxdGfr4.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Genshin Impact</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Magic Chess: Go Go" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/0qHFZfg69ZdhfENl7h0AM5uUdnF0LZaD81vW8Zg009U.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Magic Chess: Go Go</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Valorant" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/cP4l22aRjpD_rF8Vl9G2yBE6wckM3q4C1LRSgOWrVOA.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Valorant</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Point Blank" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/20PT6bH9HMb6Q5mUg-a_Bf92F3SZdbqn5I-QA7dGMRU.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Point Blank</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button> 
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
            <img alt="Honor of Kings" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/RAPXqrjLwKWUl00eZaUyk15P3cuH79cG_HYDCrs3D5Q.jpg" width="150"/>
            <h3 class="mt-2 text-lg font-bold">Honor of Kings</h3>
            <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
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
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Garena Shell</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Steam Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg"/>
                <h3 class="mt-2 text-lg font-bold">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Garena Shell</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Steam Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Minecraft</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Roblox Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg"/>
                <h3 class="mt-2 text-lg font-bold">PSN Voucher</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg"/>
                <h3 class="mt-2 text-lg font-bold">Google Play (Indonesia)</h3>
                <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">TOP-UP</button>
            </div>
        </div>
    </section>
    <!-- MOBILE -->
    <section class="mt-8">
        <div id="mobile-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4"><h2>MOBILE</h2></div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            
            <!-- MOBILE LEGENDS -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Mobile Legends Game" class="w-full h-40 object-cover rounded-md" height="200" src="{{ asset('storage/image/product/mobile-legends.webp') }}" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Mobile Legends</h3>
                <form action="{{ route('mobile-legends') }}" method="GET">
                    <button type="submit" class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">
                        TOP-UP
                    </button>
                </form>       
            </div>

            <!-- STEAM -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Steam Voucher</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP</button>
            </div>

            <!-- MINECRAFT -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Minecraft</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP</button>
            </div>

            <!-- ROBLOX -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Roblox Voucher</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP</button>
            </div>

            <!-- PSN -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">PSN Voucher</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP</button>
            </div>

            <!-- GOOGLE PLAY -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" width="150"/>
                <h3 class="mt-2 text-lg font-bold">Google Play (Indonesia)</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP</button>
            </div>
        </div>
    </section>

    <!-- PC -->
    <section class="mt-8">
        <div id="pc-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4"><h2>GAME PC</h2></div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Garena Shell</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Steam Voucher</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Minecraft</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Roblox Voucher</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">PSN Voucher</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Google Play (Indonesia)</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
        </div>
    </section>
    <!-- VOUCHER -->
    <section class="mt-8">
        <div id="voucher-section" class="section mt-8 p-4 border border-gray-300 rounded-md text-2xl font-bold mb-4"><h2>VOUCHER GAME/ENTERTAINMENT</h2></div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Garena Shell" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/f4ROsyHVbPj8M8zf2m04K527kLXdm2MnEcJeIHdB6bA.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Garena Shell</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Steam Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/WHnVi1vXMOkBo85an1Atv_VvzLrUSsvc-7Y72bXCk_0.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Steam Voucher</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Minecraft" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/nM_neafHPvhJ3g-EtYtjRi6zjaHkjazGwPjEChKpxWo.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Minecraft</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Roblox Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/RZPZo7N4f9Zhoq3waxbjCAOj92TeyONnbCVYwrtpudI.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Roblox Voucher</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="PSN Voucher" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/GYEsOuLqne1053PotuPAOZu1FsbO1-X9sAt0LK1jWBA.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">PSN Voucher</h3>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="Google Play (Indonesia)" class="w-full h-40 object-cover rounded-md" height="200" src="https://storage.googleapis.com/a1aa/image/GSwGp31qL8WgMxI0L-5fi2PBja720O4BBreDvCpquGA.jpg" width="150"/>
                    <h3 class="mt-2 text-lg font-bold">Google Play (Indonesia)</h3>
                <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md">TOP-UP
                </button>
            </div>
        </div>
    </section>
    </main>
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
