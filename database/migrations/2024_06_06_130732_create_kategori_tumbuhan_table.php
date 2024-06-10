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
        Schema::create('kategori_tumbuhan', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->unique();
            $table->enum('kategori_tumbuhan', ['Bunga', 'Buah', 'Sayur']);
            $table->string('gambar', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_tumbuhan');
    }
};
