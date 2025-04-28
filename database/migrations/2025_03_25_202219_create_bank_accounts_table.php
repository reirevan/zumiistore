<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name'); // Nama Bank (BCA, BRI, BNI, BSI, Mandiri)
            $table->string('account_number'); // Nomor Rekening
            $table->string('account_holder')->default('PT. IZUMI SUTORU'); // Pemilik Rekening
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
