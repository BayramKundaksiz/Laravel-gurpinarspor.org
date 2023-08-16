<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tablo_hazirlas', function (Blueprint $table) {
            $table->id();
            $table->string('tablo_isim')->nullable();
            $table->string('tablo_soyad')->nullable();
            $table->string('tablo_tel')->nullable();
            $table->string('tablo_konu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablo_hazirlas');
    }
};
