<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('saved_game_accounts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('game_name');
        $table->string('game_user_id')->nullable(); 
        $table->string('server_zone')->nullable(); 
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('saved_game_accounts');
    }
};
