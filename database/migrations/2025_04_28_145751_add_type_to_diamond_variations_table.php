<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('diamond_variations', function (Blueprint $table) {
            $table->string('type')->default('diamond'); // <== nambah kolom 'type' di database
        });
    }

    public function down(): void
    {
        Schema::table('diamond_variations', function (Blueprint $table) {
            $table->dropColumn('type'); // <== kalau dihapus, kolom ini juga ikut hilang
        });
    }
};
