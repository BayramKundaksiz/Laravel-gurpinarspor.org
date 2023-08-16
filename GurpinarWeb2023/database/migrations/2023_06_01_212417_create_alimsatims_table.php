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
        Schema::create('alimsatims', function (Blueprint $table) {
            $table->id();
            $table->string('satici_ismi')->nullable();
            $table->string('ilan_tarihi')->nullable();
            $table->string('urun_basligi');
            $table->string('urun_aciklamasi');
            $table->string('slug');
            $table->string('urun_gorseli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alimsatims');
    }
};
