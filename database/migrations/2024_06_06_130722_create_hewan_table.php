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
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori_hewan');
            $table->string('nama_hewan',50);
            $table->text('deskripsi',500);
            $table->string('gambar',100);

            $table->timestamps();
        });

        Schema::table('hewan', function (Blueprint $table) {
            $table->foreign('id_kategori_hewan')->references('id')->on('kategori_hewan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewan');
    }
};
