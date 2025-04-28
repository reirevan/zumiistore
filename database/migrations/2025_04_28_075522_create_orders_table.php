<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('game_user_id');
            $table->string('server_id');
            $table->string('nickname');
            $table->string('phone_number');
            $table->decimal('total_price', 10, 2)->nullable();
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->string('payment_method');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
