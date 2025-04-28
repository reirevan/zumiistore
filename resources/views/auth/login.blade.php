<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


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
    <body class="bg-gray-200">
        <!-- Header -->
        @extends('layouts.app')

        @section('title', 'Zumii Store')
        
        @section('content')
        <header class="bg-white shadow-md">
            <div class="container mx-auto flex items-center justify-between py-4 px-6">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img alt="ZUMII STORE logo" class="h-10 w-10" height="50" 
                            src="{{ asset('storage/image/logo/Logo_3.png') }}" width="50"/>
                        <span class="ml-2 text-xl font-bold">ZUMII STORE</span>
                    </a>
                </div>
        
                <!-- Search Bar (Posisi Tengah) -->
                <div class="flex-1 flex justify-center">
                    <div class="relative w-1/3">
                        <input class="border border-gray-300 rounded-full pl-10 pr-4 py-2 w-full focus:outline-none" 
                               placeholder="Cari Produk" type="text"/>
                        <i class="fas fa-search text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                    </div>
                </div>
                <!-- Spacer (Agar Navbar Seimbang) -->
                <div class="w-20"></div>
            </div>
        </header>
      
        <!-- Main Content -->
        <main class="container mx-auto flex justify-center items-center min-h-screen">
            <div class="bg-white rounded-lg shadow-lg flex overflow-hidden"> 
              <!-- Gambar Login -->
                <div>
                    <img alt="Game characters" class="mx-auto" src="{{ asset('storage/image/banner/login.png') }}" />
                </div>
      
              <!-- Form Login -->
              <div class="w-1/2 p-8">
                  <h2 class="text-2xl font-bold mb-6">MASUK</h2>
      
                  <!-- Menampilkan Pesan Error -->
                  @if ($errors->any())
                      <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                          <p>{{ $errors->first() }}</p>
                      </div>
                  @endif
      
                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Username</label>
                        <input name="username" id="username" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 focus:outline-none"
                        placeholder="Masukkan Username" type="text" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700">Password</label>
                        <input name="password" id="password" class="w-full border border-gray-300 rounded px-4 py-2 mt-2 focus:outline-none"
                        placeholder="Masukkan Password" type="password" required>
                    </div>
                    
                    <button type="submit" id="loginButton" class="bg-black text-white rounded-md px-4 py-2 w-full transition-colors duration-300">
                        Masuk
                    </button>
                    
                    <div class="flex justify-between items-center mb-6">
                        <a class="text-red-500" href="#">Lupa Kata Sandi?</a>
                    </div>
                </form>
                
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const usernameInput = document.getElementById("username");
                        const passwordInput = document.getElementById("password");
                        const loginButton = document.getElementById("loginButton");
                
                        function toggleButtonColor() {
                            if (usernameInput.value.trim() !== "" && passwordInput.value.trim() !== "") {
                                loginButton.classList.remove("bg-black");
                                loginButton.classList.add("bg-red-500");
                            } else {
                                loginButton.classList.remove("bg-red-500");
                                loginButton.classList.add("bg-black");
                            }
                        }
                
                        usernameInput.addEventListener("input", toggleButtonColor);
                        passwordInput.addEventListener("input", toggleButtonColor);
                    });
                </script>
                
      
                  <div class="flex items-center my-6">
                      <hr class="flex-grow border-gray-300" />
                      <span class="mx-4 text-gray-500">Atau</span>
                      <hr class="flex-grow border-gray-300" />
                  </div>
      
                  <div class="flex justify-center space-x-4">
                      <button class="bg-white border border-gray-300 rounded-full p-2">
                          <i class="fab fa-google text-red-500"></i>
                      </button>
                      <button class="bg-white border border-gray-300 rounded-full p-2">
                          <i class="fab fa-facebook text-blue-500"></i>
                      </button>
                      <button class="bg-white border border-gray-300 rounded-full p-2">
                          <i class="fab fa-apple text-black"></i>
                      </button>
                  </div>
      
                  <div class="text-center mt-6">
                      <span class="text-gray-700">
                          Kamu tidak punya Akun?
                          <a class=text-red-500 href="{{ route('register') }}">Daftar</a>
                      </span>
                  </div>
              </div>
          </div>
      </main>
      
      <!-- JavaScript untuk Toggle Password -->
      <script>
          document.getElementById("togglePassword").addEventListener("click", function() {
              const passwordField = document.getElementById("password");
              if (passwordField.type === "password") {
                  passwordField.type = "text";
              } else {
                  passwordField.type = "password";
              }
          });
      </script>
    
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
