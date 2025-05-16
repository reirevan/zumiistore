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

        #popupContainer select {
            position: relative;
            z-index: 10;
            overflow-y: auto;
        }

        #popupContainer {
            align-items: start !important; /* Supaya popup muncul dari atas layar */
            padding-top: 3rem; /* Jarak dari atas */
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
                            <a class="flex items-center gap-2 bg-[#f9d54a] text-black rounded-md px-3 py-2 text-[13px] font-semibold" href="#">
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
            <main class="flex-1">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-base font-normal text-black">
                        Daftar Akun Game yang tersimpan
                    </h2>

                    <!-- Tombol Tambah Akun -->
                    <button
                        id="openPopup"
                        class="bg-red-600 text-white text-sm font-semibold rounded px-4 py-2 flex items-center space-x-1"
                        type="button">
                        <span>Tambah</span>
                        <span class="text-lg font-bold leading-none">+</span>
                    </button>
                </div>

                <!-- Pop-up -->
                <div
                    id="popupContainer"
                    class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden z-50"
                >
                    <div class="w-full max-w-lg bg-white rounded-3xl border border-gray-200 relative p-8">
                        <h1 class="text-center font-extrabold text-lg leading-6 mb-6">
                            Tambah Akun Game
                        </h1>
                        <!-- Tombol Close -->
                        <button
                            id="closePopup"
                            aria-label="Close"
                            class="absolute top-6 right-6 text-black text-xl font-light focus:outline-none"
                            type="button"
                        >
                            <i class="fas fa-times"></i>
                        </button>

                        <!-- Form Tambah Akun -->
                        <form id="formTambahAkun" class="space-y-4">
                            <!-- Pilih Game -->
                            <div class="relative">
                                <label for="game-select" class="block text-sm font-semibold text-gray-700 mb-1">Pilih Game</label>
                                <select
                                    id="game-select"
                                    name="game"
                                    class="appearance-none w-full border border-gray-300 rounded-md py-2 pl-3 pr-8 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-black focus:border-black cursor-pointer"
                                    required
                                >
                                    <option value="" disabled selected hidden>Cari Game</option>
                                    <optgroup label="GAME MOBILE">
                                        <option value="mobile-legends">Mobile Legends: Bang Bang</option>
                                        <option value="freefire">FREEFIRE</option>
                                        <option value="pubg">PUBG MOBILE</option>
                                        <option value="honor-of-kings">Honor of Kings</option>
                                        <option value="genshin-impact">Genshin Impact</option>
                                        <option value="magic-chess">Magic Chess : Go Go</option>
                                        <option value="zepeto">Zepeto</option>
                                        <option value="call-of-duty">Call of Duty Mobile</option>
                                        <option value="honkai-impact">Honkai Impact 3</option>
                                        <option value="wildrift">League of Legends: Wildrift</option>
                                        <option value="arena-breakout">Arena Breakout</option>
                                    </optgroup>
                                    <optgroup label="GAME PC">
                                        <option value="point-blank">Point Blank</option>
                                        <option value="valorant">Valorant</option>
                                        <option value="delta-force">Delta Force</option>
                                        <option value="ragnarok-origin">Ragnarok Origin</option>
                                        <option value="arena-breakout-infinite">Arena Breakout: Infinite</option>
                                        <option value="league-of-legend">League of Legend</option>
                                    </optgroup>
                                    <optgroup label="VOUCHER">
                                        <option value="garena-shell">Garena Shell</option>
                                        <option value="steam-voucher">Steam Voucher</option>
                                        <option value="minecraft">Minecraft</option>
                                        <option value="roblox-voucher">Roblox Voucher</option>
                                        <option value="psn-voucher">PSN Voucher</option>
                                        <option value="google-play">Google Play (Indonesia)</option>
                                    </optgroup>
                                </select>
                            </div>

                            <!-- Nickname -->
                            <div class="relative">
                                <label for="nickname" class="block text-sm font-semibold text-gray-700 mb-1">Nickname</label>
                                <div class="flex space-x-2 items-center relative">

                                    <!-- Input Nickname -->
                                    <div class="relative w-full">
                                        <input
                                            type="text"
                                            id="nickname"
                                            name="nickname"
                                            placeholder="Nickname ditampilkan otomatis jika Data Akun Game Benar"
                                            class="w-full border border-gray-300 rounded-md py-2 px-3 text-sm text-gray-700 pr-10 focus:outline-none focus:ring-1 focus:ring-black focus:border-black bg-gray-100"
                                            readonly
                                        />

                                        <!-- Ikon Status Berhasil -->
                                        <div id="nickname-check" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-green-600 hidden">
                                            <i class="fas fa-check-circle"></i>
                                        </div>

                                        <!-- Ikon Status Gagal -->
                                        <div id="nickname-cross" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-red-600 hidden">
                                            <i class="fas fa-times-circle"></i>
                                        </div>
                                    </div>

                                    <!-- Tombol Cek -->
                                    <button
                                        type="button"
                                        id="cek-akun"
                                        class="px-3 py-2 bg-black text-white text-xs font-semibold rounded hover:bg-gray-800"
                                    >Cek</button>
                                </div>
                            </div>

                            <!-- User ID -->
                            <div>
                                <label for="user_id" class="block text-sm font-semibold text-gray-700 mb-1">User ID</label>
                                <input
                                    type="text"
                                    id="user_id"
                                    name="user_id"
                                    placeholder="Masukkan User ID"
                                    class="w-full border border-gray-300 rounded-md py-2 px-3 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-black focus:border-black"
                                    required
                                />
                            </div>

                            <!-- Server ID -->
                            <div>
                                <label for="server_id" class="block text-sm font-semibold text-gray-700 mb-1">Zone / Server ID</label>
                                <input
                                    type="text"
                                    id="server_id"
                                    name="server_id"
                                    placeholder="Masukkan Server ID"
                                    class="w-full border border-gray-300 rounded-md py-2 px-3 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-black focus:border-black"
                                    required
                                />
                            </div>

                            <!-- Tombol Simpan -->
                            <div class="pt-4 text-center">
                                <button
                                    type="submit"
                                    id="simpan-akun"
                                    class="bg-red-600 text-white text-sm font-semibold rounded px-6 py-2 hover:bg-red-700 opacity-50 cursor-not-allowed"
                                    disabled
                                >
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Daftar Akun Game -->
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-[#25283d] text-white text-xs font-semibold text-left">
                            <th class="py-3 px-4 w-28">Layanan</th>
                            <th class="py-3 px-4 w-48">Nickname</th>
                            <th class="py-3 px-4 w-24">User ID</th>
                            <th class="py-3 px-4 w-20">Zone</th>
                            <th class="py-3 px-4 w-20">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-xs text-[#4a4a4a]">
                        <tr class="border-b border-gray-300">
                            <td class="py-3 px-4 flex items-center space-x-3">
                                <img
                                    alt="Game Icon"
                                    class="w-10 h-10 rounded-sm bg-gray-300"
                                    src="https://storage.googleapis.com/a1aa/image/391f28ef-f9a6-4514-fa10-55fa32d85cc6.jpg"
                                />
                                <span class="font-semibold text-black text-[13px]">Mobile Legends</span>
                            </td>
                            <td class="py-3 px-4 text-[11px] font-normal">Rey Izumii</td>
                            <td class="py-3 px-4 text-[11px] font-normal">112233</td>
                            <td class="py-3 px-4 text-[11px] font-normal">1122</td>
                            <td class="py-3 px-4 flex items-center space-x-3">
                                <button class="text-blue-600 text-sm edit-btn" type="button">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="text-red-600 text-sm delete-btn" type="button">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
            </div>
        </div>
    </main>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const openPopupBtn = document.getElementById("openPopup");
        const closePopupBtn = document.getElementById("closePopup");
        const popupContainer = document.getElementById("popupContainer");

        // Menggunakan tombol untuk membuka popup
        if (openPopupBtn) {
            openPopupBtn.addEventListener("click", () => {
                if (popupContainer) {
                    popupContainer.classList.remove("hidden");
                    popupContainer.classList.add("flex");
                } else {
                    console.warn("popupContainer tidak ditemukan.");
                }
            });
        } else {
            console.warn("Tombol Tambah (#openPopup) tidak ditemukan.");
        }

        const closePopup = () => {
            if (popupContainer) {
                popupContainer.classList.add("hidden");
                popupContainer.classList.remove("flex");
            }
        };

         // Klik tombol X
        if (closePopupBtn) {
            closePopupBtn.addEventListener("click", closePopup);
        }

        // Tekan tombol ESC
        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                closePopup();
            }
        });

        const userIdInput = document.getElementById('user_id');
        const serverIdInput = document.getElementById('server_id');
        const nicknameInput = document.getElementById('nickname');
        const nicknameCheck = document.getElementById('nickname-check');
        const nicknameCross = document.getElementById('nickname-cross');
        const simpanBtn = document.getElementById('simpan-akun');
        const form = document.getElementById("formTambahAkun");
        const tableBody = document.querySelector('table.w-full.border-collapse tbody');

        let akunValid = false;

        // Reset status ikon
        const resetStatusIcons = () => {
            nicknameCheck.classList.add('hidden');
            nicknameCross.classList.add('hidden');
            simpanBtn?.classList.add("opacity-50", "cursor-not-allowed");
            if (simpanBtn) simpanBtn.disabled = true;
            akunValid = false;
        };

        // Set status berhasil
        const setSuccessState = (nickname) => {
            nicknameInput.value = nickname;
            nicknameCheck.classList.remove('hidden');
            nicknameCross.classList.add('hidden');
            simpanBtn?.classList.remove("opacity-50", "cursor-not-allowed");
            if (simpanBtn) simpanBtn.disabled = false;
            akunValid = true;
        };

        // Set status gagal
        const setFailedState = () => {
            nicknameInput.value = '';
            nicknameCheck.classList.add('hidden');
            nicknameCross.classList.remove('hidden');
            simpanBtn?.classList.add("opacity-50", "cursor-not-allowed");
            if (simpanBtn) simpanBtn.disabled = true;
            akunValid = false;
        };

        // Fungsi fetch nickname
        const fetchNickname = async (userId, serverId) => {
            try {
                const response = await fetch(`/api/nickname?user_id=${userId}&server_id=${serverId}`);
                const data = await response.json();

                if (response.ok && data.nickname) {
                    setSuccessState(data.nickname);
                } else {
                    setFailedState();
                    alert("Nickname tidak ditemukan atau data salah.");
                }
            } catch (err) {
                console.error('Gagal fetch nickname:', err);
                setFailedState();
                alert("Terjadi kesalahan saat mengambil data nickname.");
            }
        };

        const tryFetchNickname = () => {
            const userId = userIdInput?.value.trim();
            const serverId = serverIdInput?.value.trim();

            if (userId && serverId) {
                fetchNickname(userId, serverId);
            } else {
                nicknameInput.value = '';
                resetStatusIcons();
            }
        };

        userIdInput?.addEventListener('input', () => {
            resetStatusIcons();
            tryFetchNickname();
        });

        serverIdInput?.addEventListener('input', () => {
            resetStatusIcons();
            tryFetchNickname();
        });

        document.getElementById('cek-akun')?.addEventListener('click', () => {
            tryFetchNickname();
        });

        // STEP 3: Load Daftar Akun
        const loadGameAccounts = async () => {
            try {
                const res = await fetch('/api/list-game-accounts');
                const accounts = await res.json();

                tableBody.innerHTML = '';  // kosongkan dulu

                accounts.forEach(acc => {
                    const tr = document.createElement('tr');
                    tr.classList.add('border-b', 'border-gray-300');
                    tr.innerHTML = `
                        <td class="py-3 px-4">${getGameDisplayName(acc.game)}</td>
                        <td class="py-3 px-4 text-[11px] font-normal">${acc.nickname}</td>
                        <td class="py-3 px-4 text-[11px] font-normal">${acc.user_id}</td>
                        <td class="py-3 px-4 text-[11px] font-normal">${acc.server_id}</td>
                        <td class="py-3 px-4 flex items-center space-x-3">
                            <button class="text-blue-600 text-sm edit-btn" data-id="${acc.id}" type="button">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="text-red-600 text-sm delete-btn" data-id="${acc.id}" type="button">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    `;
                    tableBody.appendChild(tr);
                });
            } catch (err) {
                console.error('Gagal memuat daftar akun:', err);
            }
        };

        // Fungsi bantu: dapatkan display name dari slug game
        const getGameDisplayName = slug => {
            const opt = document.querySelector(`select#game-select option[value="${slug}"]`);
            return opt ? opt.textContent : slug;
        };

        // Panggil pertama kali saat halaman siap
        loadGameAccounts();

        // Submit form simpan akun via AJAX
        form?.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!akunValid) {
                alert("Data akun belum valid. Silakan cek ulang.");
                return;
            }

            const formData = new FormData(form);

            // Mengirimkan data form untuk disimpan
            fetch("/save-game-account", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        alert("Akun berhasil disimpan!");
                        form.reset();
                        nicknameInput.value = "";
                        nicknameCheck.classList.add("hidden");
                        simpanBtn.disabled = true;
                        simpanBtn.classList.add("opacity-50", "cursor-not-allowed");
                        akunValid = false;
                        loadGameAccounts();  // Refresh tabel setelah simpan
                    } else {
                        alert(data.message || "Gagal menyimpan akun.");
                    }
                })
                .catch(() => {
                    alert("Terjadi kesalahan saat menyimpan akun.");
                });
        });
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
