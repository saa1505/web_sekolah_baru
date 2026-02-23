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
        Schema::table('pendaftarans', function (Blueprint $table) {
            // Hapus kolom 'jk' karena akan diganti 'jenis_kelamin' agar sesuai controller
            if (Schema::hasColumn('pendaftarans', 'jk')) {
                $table->dropColumn('jk');
            }

            // Tambah kolom yang kurang agar sama persis dengan Controller & Blade
            $table->string('jenis_kelamin')->after('nisn')->nullable();
            $table->string('kewarganegaraan')->after('agama')->nullable();
            $table->string('desa')->after('alamat')->nullable();
            $table->string('kecamatan')->after('desa')->nullable();
            $table->string('kabupaten')->after('kecamatan')->nullable();
            $table->string('kode_pos')->after('kabupaten')->nullable();
            $table->string('tempat_tinggal')->after('kode_pos')->nullable();
            $table->integer('anak_ke')->after('tempat_tinggal')->nullable();
            $table->integer('jumlah_saudara')->after('anak_ke')->nullable();
            $table->string('memiliki_kip')->after('jumlah_saudara')->nullable();
            $table->string('terima_kip')->after('memiliki_kip')->nullable();

            // Melengkapi data Ayah
            $table->string('nik_ayah')->after('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->after('nik_ayah')->nullable();
            $table->date('tgl_lahir_ayah')->after('tempat_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->after('tgl_lahir_ayah')->nullable();
            $table->string('penghasilan_ayah')->after('pekerjaan_ayah')->nullable();

            // Melengkapi data Ibu
            $table->string('nik_ibu')->after('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->after('nik_ibu')->nullable();
            $table->date('tgl_lahir_ibu')->after('tempat_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->after('tgl_lahir_ibu')->nullable();
            $table->string('penghasilan_ibu')->after('pekerjaan_ibu')->nullable();

            $table->string('hp_orang_tua')->after('email_siswa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            //
        });
    }
};
