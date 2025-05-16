<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();  // ID Pesanan
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User yang memesan
            $table->string('game_user_id');  // ID pengguna dalam game
            $table->string('server_id');  // Server zone game
            $table->string('nickname');  // Nickname pengguna
            $table->string('phone_number');  // Nomor HP pengguna
            $table->decimal('total_price', 10, 2);  // Total harga
            $table->string('status');  // Status pesanan (pending, completed, etc.)
            $table->string('payment_method');  // Metode pembayaran
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
