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
        Schema::create('ustalars', function (Blueprint $table) {
            $table->id();
            $table->string('usta_ismi');
            $table->string('ustanin_yaptigi_is');
            $table->string('slug');
            $table->string('usta_aciklamasi');
            $table->string('usta_gorseli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ustalars');
    }
};
