<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan User Seeder
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Tambahkan ini untuk menjalankan ProductSeeder
        $this->call([
            AdminSeeder::class,
            UsersTableSeeder::class,
            ProductSeeder::class,
            GameAccountSeeder::class,
            DiamondVariationsSeeder::class,
        ]);
    }
}
