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
        

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <main class="container mx-auto py-8 px-6">
        <div class="text-center mb-8">
         <div class="bg-gradient-to-r from-red-500 to-black text-white py-4 rounded-lg">
          <h1 class="text-3xl font-bold">
           KATALOG GAME
          </h1>
         </div>
        </div>
        <section class="mb-8">
         <h2 class="text-2xl font-bold mb-4">
          LAYANAN GAME
         </h2>
         <div class="flex justify-center space-x-4">
          <button class="bg-blue-100 text-blue-500 px-4 py-2 rounded-lg">
           SEMUA GAME
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-lg border border-gray-300">
           MOBILE
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-lg border border-gray-300">
           PC
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-lg border border-gray-300">
           VOUCHER
          </button>
         </div>
        </section>
        <section class="mb-8">
         <h2 class="text-2xl font-bold mb-4">
          GAME MOBILE
         </h2>
         <section class="mb-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/mobile-legends.webp') }}"
                         alt="Mobile Legends: Bang Bang"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Monton</h3>
                        <p class="text-sm text-gray-700 truncate" title="Mobile Legends: Bang Bang">
                            Mobile Legends: Bang Bang
                        </p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
                
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/free-fire.webp') }}"
                         alt="FREEFIRE"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Garena</h3>
                        <p class="text-sm text-gray-700 truncate" title="FREEFIRE">
                            FREEFIRE
                        </p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
                
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/pubg-mobile-id.webp') }}"
                         alt="PUBG MOBILE"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Tencent</h3>
                        <p class="text-sm text-gray-700 truncate" title="PUBG MOBILE">
                            PUBG MOBILE
                        </p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
                
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/honor-of-king.webp') }}"
                         alt="Honor of Kings"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">TiMi Studio</h3>
                        <p class="text-sm text-gray-700 truncate" title="Honor of Kings">
                            Honor of Kings
                        </p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
                
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/genshin-impact.webp') }}"
                         alt="Genshin Impact"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">HoYoverse</h3>
                      <p class="text-sm text-gray-700 truncate" title="Genshin Impact">Genshin Impact</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/magic-chess.webp') }}"
                         alt="Magic Chess : Go Go"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">Vizta Games</h3>
                      <p class="text-sm text-gray-700 truncate" title="Magic Chess : Go Go">Magic Chess : Go Go</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/zepetto.webp') }}"
                         alt="Zepeto"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">Zepeto</h3>
                      <p class="text-sm text-gray-700 truncate" title="Zepeto">Zepeto</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/arena-of-valor.webp') }}"
                         alt="Arena Of Valor"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">Garena</h3>
                      <p class="text-sm text-gray-700 truncate" title="Arena Of Valor">Arena Of Valor</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/cod-mobile.webp') }}"
                         alt="Call of Duty Mobile"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">Garena</h3>
                      <p class="text-sm text-gray-700 truncate" title="Call of Duty Mobile">Call of Duty Mobile</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/honkai-impact.jpeg') }}"
                         alt="Honkai Impact 3"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">HoYoverse</h3>
                      <p class="text-sm text-gray-700 truncate" title="Honkai Impact 3">Honkai Impact 3</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/lol-wildrift.webp') }}"
                         alt="League of Legends: Wildrift"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">Riot Games</h3>
                      <p class="text-sm text-gray-700 truncate" title="League of Legends: Wildrift">League of Legends: Wildrift</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>
                  
                  <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/arena-breakout.webp') }}"
                         alt="Arena Breakout"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                      <h3 class="text-sm font-semibold">Level Infinite</h3>
                      <p class="text-sm text-gray-700 truncate" title="Arena Breakout">Arena Breakout</p>
                      <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                  </div>     
            </div>
        </section>          
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">GAME PC</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/point-blank.webp') }}"
                         alt="Point Blank"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Zepeto</h3>
                        <p class="text-sm text-gray-700 truncate" title="Point Blank">Point Blank</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/valorant.webp') }}"
                         alt="Valorant"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Riot Games</h3>
                        <p class="text-sm text-gray-700 truncate" title="Valorant">Valorant</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/delta-garena.webp') }}"
                         alt="Delta Force"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">TiMi Studio Grup</h3>
                        <p class="text-sm text-gray-700 truncate" title="Delta Force">Delta Force</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/ragnarok-origin.webp') }}"
                         alt="Ragnarok Origin"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">In App Pack</h3>
                        <p class="text-sm text-gray-700 truncate" title="Ragnarok Origin">Ragnarok Origin</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/arena-breakout-origin.webp') }}"
                         alt="Arena Breakout: Infinite"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Level Infinite</h3>
                        <p class="text-sm text-gray-700 truncate" title="Arena Breakout: Infinite">Arena Breakout: Infinite</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/league-of-legends.webp') }}"
                         alt="League of Legend"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Riot Games</h3>
                        <p class="text-sm text-gray-700 truncate" title="League of Legend">League of Legend</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">VOUCHER</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/shell.webp') }}"
                         alt="Garena Shell"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Garena</h3>
                        <p class="text-sm text-gray-700 truncate" title="Garena Shell">Garena Shell</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/steam-wallet-voucher.webp') }}"
                         alt="Steam Voucher"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">STEAM</h3>
                        <p class="text-sm text-gray-700 truncate" title="Steam Voucher">Steam Voucher</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/minecraft.webp') }}"
                         alt="Minecraft"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Mojang</h3>
                        <p class="text-sm text-gray-700 truncate" title="Minecraft">Minecraft</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/roblox.webp') }}"
                         alt="Roblox Voucher"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Roblox Corporation</h3>
                        <p class="text-sm text-gray-700 truncate" title="Roblox Voucher">Roblox Voucher</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/psn.webp') }}"
                         alt="PSN Voucher"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Playstation</h3>
                        <p class="text-sm text-gray-700 truncate" title="PSN Voucher">PSN Voucher</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
                </div>
        
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/image/product/google-play.webp') }}"
                         alt="Google Play (Indonesia)"
                         class="w-full h-40 object-cover" />
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">Google</h3>
                        <p class="text-sm text-gray-700 truncate" title="Google Play (Indonesia)">Google Play (Indonesia)</p>
                        <button class="bg-red-500 text-white w-full py-2 mt-2 rounded-lg">Periksa</button>
                    </div>
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
