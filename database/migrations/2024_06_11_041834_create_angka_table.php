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
        Schema::create('angka', function (Blueprint $table) {
            $table->id();
            $table->integer('angka');
            $table->string('deskripsi', 50);
            $table->string('img_angka', 50);
            $table->string('img_des', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angka');
    }
};
