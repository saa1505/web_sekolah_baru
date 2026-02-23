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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pendaftaran');
            $table->string('jalur_pendaftaran');
            $table->string('nik');
            $table->string('sekolah_asal');
            $table->string('program_keahlian');
            $table->string('nama_lengkap');
            $table->string('nisn');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->text('alamat');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('hp_siswa');
            $table->string('email_siswa');
            $table->string('foto_path')->nullable();
            $table->string('kk_path')->nullable();
            $table->string('akte_path')->nullable();
            $table->string('kip_path')->nullable();
             $table->string('bukti_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
