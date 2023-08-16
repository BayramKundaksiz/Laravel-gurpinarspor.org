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
        Schema::create('duyurulars', function (Blueprint $table) {
            $table->id();
            $table->string('duyuru_yazar')->nullable();
            $table->string('duyuru_tarih')->nullable();
            $table->string('duyuru_baslik');
            $table->string('slug');
            $table->string('duyuru_gorsel');
            $table->string('duyuru_aciklama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duyurulars');
    }
};
