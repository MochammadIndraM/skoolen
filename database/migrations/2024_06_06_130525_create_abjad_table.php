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
        Schema::create('abjad', function (Blueprint $table) {
            $table->id();
            $table->string('huruf', 3);
            $table->string('img_abjad', 100);
            $table->string('img_des', 100);
            $table->string('deskripsi', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abjad');
    }
};