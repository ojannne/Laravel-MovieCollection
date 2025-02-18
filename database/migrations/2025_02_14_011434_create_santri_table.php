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
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama'); // Changed from integer to string
            $table->string('jurusan');
            $table->string('kamar');
            $table->string('kondisi');
            $table->string('kategori_sakit'); // Corrected the typo from 'katekogi sakit' to 'kategori_sakit'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};