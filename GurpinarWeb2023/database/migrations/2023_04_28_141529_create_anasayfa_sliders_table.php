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
        Schema::create('anasayfa_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('yazar_adi')->nullable();
            $table->string('tarih')->nullable();
            $table->string('baslik');
            $table->string('slug');
            $table->string('aciklama')->nullable();
            $table->string('gorsel');
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
        Schema::dropIfExists('anasayfa_sliders');
    }
};
