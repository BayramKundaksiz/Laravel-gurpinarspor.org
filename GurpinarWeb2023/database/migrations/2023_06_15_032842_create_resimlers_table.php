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
        Schema::create('resimlers', function (Blueprint $table) {
            $table->id();
            $table->string('gonderici_ismi')->nullable();
            $table->string('resim_tarihi')->nullable();
            $table->string('resim_basligi');
            $table->string('slug');
            $table->string('resim_aciklamasi')->nullable();
            $table->string('resim_gorseli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resimlers');
    }
};
