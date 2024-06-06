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
        Schema::create('tumbuhan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori_tumbuhan');
            $table->string('nama_tumbuhan',50);
            $table->text('deskripsi',500);
            $table->string('gambar',100);

            $table->timestamps();
        });

        Schema::table('tumbuhan', function (Blueprint $table) {
            $table->foreign('id_kategori_tumbuhan')->references('id')->on('kategori_tumbuhan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tumbuhan');
    }
};
