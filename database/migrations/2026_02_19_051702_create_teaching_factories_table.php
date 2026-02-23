<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teaching_factories', function (Blueprint $table) {
            $table->id();
            $table->string('foto'); // Untuk gambar Kadwa Creative
            $table->string('judul');
            $table->text('deskripsi'); // Untuk teks tentang sertifikat DJKI dsb
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_factories');
    }
};
