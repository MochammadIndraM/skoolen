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
        Schema::create('kategori_hewan', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori_hewan', ['Mamalia', 'Ikan', 'Burung', 'Reptil', 'Amfibi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_hewan');
    }
};
