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
        Schema::create('game_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('server_id');
            $table->string('nickname');
            $table->timestamps();
        
            // Jadikan kombinasi user_id + server_id sebagai unique
            $table->unique(['user_id', 'server_id']);
        });
        
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_accounts');
    }
};
