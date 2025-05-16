<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('diamond_variations', function (Blueprint $table) {
            $table->id();
            $table->integer('nominal'); // Jumlah diamond utama
            $table->integer('bonus')->nullable(); // Bonus diamond (jika ada)
            $table->integer('total'); // Total diamond (nominal + bonus)
            $table->integer('price'); // Harga dalam rupiah
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diamond_variations');
    }
};
