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
    // Kita pakai Create saja agar kalau tabelnya berantakan, dia buat ulang yang benar
    Schema::dropIfExists('pendaftarans'); 
    Schema::create('pendaftarans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap')->nullable();
        $table->string('jenis_pendaftaran')->nullable();
        $table->string('jalur_pendaftaran')->nullable();
        $table->string('nik')->nullable();
        $table->string('nisn')->nullable();
        $table->string('jenis_kelamin')->nullable();
        $table->string('tempat_lahir')->nullable();
        $table->date('tanggal_lahir')->nullable();
        $table->string('agama')->nullable();
        $table->text('alamat')->nullable();
        $table->string('no_telp')->nullable();
        $table->string('email')->nullable();
        $table->string('sekolah_asal')->nullable();
        $table->string('program_keahlian')->nullable();
        
        // Data Orang Tua (Wali)
        $table->string('nama_ortu')->nullable();
        $table->string('pekerjaan_ortu')->nullable();
        $table->string('no_telp_ortu')->nullable();
        $table->text('alamat_ortu')->nullable();

        // Kolom Upload (Penyebab error Unknown Column)
        $table->string('pas_foto')->nullable();
        $table->string('kk')->nullable();
        $table->string('akta_lahir')->nullable();
        $table->string('kip')->nullable();
        $table->string('status')->default('Pending');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            // Jika ingin rollback
        });
    }
};