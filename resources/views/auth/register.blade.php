<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daftar Akun</title>
        <link rel="icon" type="image/png" href="{{ asset('storage/image/logo/Logo_3.png') }}">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
              *::before, *::after {
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
              }

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

              /* Tables */
              table {
                  border-collapse: collapse;
                  border-spacing: 0;
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

              .grid {
                  display: grid;
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

              .top-0 {
                  top: 0;
              }

              .z-0 {
                  z-index: 0;
              }

              /* Spacing */
              .m-0 {
                  margin: 0;
              }

              .mt-4 {
                  margin-top: 1rem;
              }

              .p-6 {
                  padding: 1.5rem;
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

              .bg-gray-50 {
                  background-color: #f9fafb;
              }

              .bg-gradient-to-b {
                  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
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
              .scrolling {
                          display: inline-block;
                          animation: scroll 20s linear infinite;
                          }
                          @keyframes scroll {
                          0% { transform: translateX(100%); }
                          100% { transform: translateX(-100%); }
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
                          </style>
        @endif
    </head>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Toggle visibility for password field
            document.getElementById('togglePassword').addEventListener('click', function () {
                let passwordInput = document.getElementById('passwordInput');
                let type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
                this.classList.toggle('fa-eye-slash');
            });
    
            // Toggle visibility for confirm password field
            document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
                let confirmPasswordInput = document.getElementById('confirmPasswordInput');
                let type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
                confirmPasswordInput.type = type;
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
    <body class="bg-gray-200">
        @extends('layouts.app')
        @section('content')
        <header class="bg-white shadow-md">
            <div class="container mx-auto flex flex-col items-center py-4 px-6">
                <div class="w-full flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <img alt="ZUMII STORE logo" class="h-10 w-10" height="50" 
                                src="{{ asset('storage/image/logo/Logo_3.png') }}" width="50"/>
                            <span class="ml-2 text-xl font-bold">ZUMII STORE</span>
                        </a>
                    </div>
        
                    <!-- Search Bar -->
                    <div class="flex items-center w-1/2 relative">
                        <input class="border border-gray-300 rounded-full pl-10 pr-4 py-2 w-full focus:outline-none" 
                            placeholder="Cari Produk" type="text"/>
                        <i class="fas fa-search text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                    </div>
                </div>
                <!-- Spacer (Agar Navbar Seimbang) -->
                <div class="w-20"></div>
            </div>
        </header>
        <br>
        <main class="container mx-auto flex justify-center items-center min-h-screen">
            <div class="bg-white rounded-lg shadow-lg flex overflow-hidden w-full max-w-4xl"> 
                <!-- Gambar Register -->
                <div class="hidden md:block w-1/2">
                    <img alt="Game characters" class="mx-auto" src="{{ asset('storage/image/banner/register.png') }}" />
                </div>
        
                <!-- Form Register -->
                <div class="w-full md:w-1/2 p-8">
                    <h2 class="text-2xl font-bold mb-6 text-center">DAFTAR</h2>
        
                    <!-- Menampilkan Pesan Error -->
                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                            <p>{{ $errors->first() }}</p>
                        </div>
                    @endif
        
                    <!-- Form -->
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="block text-gray-700">Username</label>
                            <input name="username" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 focus:outline-none" 
                                   placeholder="Masukkan Username" type="text" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Nama Lengkap</label>
                            <input name="name" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 focus:outline-none" 
                                   placeholder="Masukkan Nama Lengkap" type="text" required>
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700">Email</label>
                            <input name="email" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 focus:outline-none" 
                                   placeholder="Masukkan Email" type="email" required>
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700">Nomor Telepon</label>
                            <input name="phone" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 focus:outline-none" 
                                   placeholder="Masukkan Nomor Telepon" type="text" required>
                        </div>
        
                        <div class="mb-4 relative">
                            <label class="block text-gray-700">Password</label>
                            <div class="relative">
                                <input name="password" id="passwordInput" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 pr-10 focus:outline-none" 
                                       placeholder="Masukkan Password" type="password" required>
                                <i class="fas fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 cursor-pointer" 
                                   id="togglePassword"></i>
                            </div>
                        </div>
                        
                        <div class="mb-4 relative">
                            <label class="block text-gray-700">Konfirmasi Password</label>
                            <div class="relative">
                                <input name="password_confirmation" id="confirmPasswordInput" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 pr-10 focus:outline-none" 
                                       placeholder="Ketik Ulang Password" type="password" required>
                                <i class="fas fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 cursor-pointer" 
                                   id="toggleConfirmPassword"></i>
                            </div>
                        </div>
                    
                        <div class="mb-4 flex items-center">
                            <input name="agree" type="checkbox" class="mr-2" required>
                            <label class="text-gray-700">Saya menyetujui <a href="#" class="text-blue-500">Syarat & Ketentuan</a>.</label>
                        </div>
        
                        <button type="submit" class="w-full bg-black text-white py-2 rounded hover:bg-gray-900">
                            Daftar
                        </button>
                    </form>
        
                    <div class="text-center mt-6">
                        <span class="text-gray-700">
                            Sudah punya akun?
                            <a class="text-red-500" href="{{ route('login') }}">Masuk</a>
                        </span>
                    </div>
                </div>
            </div>
        </main>
<br>        
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
    @endsection
</html>
