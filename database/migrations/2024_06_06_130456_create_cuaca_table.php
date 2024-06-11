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
        Schema::create('cuaca', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->unique();
            $table->enum('list_cuaca', ['Pelangi', 'Hujan', 'Petir', 'Cerah', 'Dingin', 'Panas', 'Mendung', 'Berangin']);
            $table->string('icon', 100);
            $table->text('deskripsi',500);
            $table->string('video_id', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuaca');
    }
};
