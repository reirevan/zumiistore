<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;           // pakai model Admin, bukan User
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::where('username', 'adminrey1')->delete();

        // Buat akun admin baru
        Admin::create([
            'name'       => 'Admin Rey',
            'username'   => 'adminrey1',
            'email'      => 'adminrey1@gmail.com',
            'password'   => Hash::make('revan0000'),
            'is_active'  => true,       // kolom di tabel admins
            'remember_token' => null,   // opsional
        ]);
    }
}
