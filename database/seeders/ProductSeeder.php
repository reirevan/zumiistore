<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        echo "Seeding dimulai...\n";

        // Matikan sementara foreign key checks agar bisa menghapus data
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Hapus semua data di tabel products (lebih efisien menggunakan truncate)
        DB::table('products')->truncate();

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Tambahkan data baru
        DB::table('products')->insert([
            [
                'name' => 'Mobile Legends Diamond',
                'description' => 'Top-up Diamond untuk game Mobile Legends.',
                'category_id' => 1, // Gunakan ID kategori yang sesuai
                'price' => 3000, // Menambahkan harga produk
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'VIP Platinum Reseller',
                'description' => 'Paket spesial untuk reseller dengan harga lebih murah.',
                'category_id' => 1, // Gunakan ID kategori yang sesuai
                'price' => 7000, // Menambahkan harga produk
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan lebih banyak produk sesuai kebutuhan
            [
                'name' => 'PUBG Mobile UC',
                'description' => 'Top-up UC untuk game PUBG Mobile.',
                'category_id' => 2, // Misalnya kategori lain
                'price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Free Fire Diamonds',
                'description' => 'Top-up Diamonds untuk game Free Fire.',
                'category_id' => 3, // Misalnya kategori lain
                'price' => 1500,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        
        echo "Seeding selesai!\n";
    }
}
