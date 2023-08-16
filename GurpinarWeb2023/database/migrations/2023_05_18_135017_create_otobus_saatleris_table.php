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
        Schema::create('otobus_saatleris', function (Blueprint $table) {
            $table->id();
            $table->string('otobus_baslik');
            $table->string('slug');
            $table->string('otobus_aciklama')->nullable();
            $table->string('otobus_gorsel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otobus_saatleris');
    }
};
