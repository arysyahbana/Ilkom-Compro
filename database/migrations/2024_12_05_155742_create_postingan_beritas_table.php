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
        Schema::create('postingan_beritas', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('link')->nullable();
            $table->string('nama_penulis');
            $table->string('judul');
            $table->text('isi_halaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingan_beritas');
    }
};
