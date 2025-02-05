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
            Schema::create('lokasi', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('city');
                $table->string('state');
                $table->string('link_maps');
                $table->string('zip_code');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasi');
    }
};
