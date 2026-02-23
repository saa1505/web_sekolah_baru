<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pendaftarans', function (Blueprint $table) {
            // Cek dulu biar gak duplicate error lagi
            if (!Schema::hasColumn('pendaftarans', 'pas_foto')) {
                $table->string('pas_foto')->nullable();
                $table->string('kk')->nullable();
                $table->string('akta_lahir')->nullable();
                $table->string('kip')->nullable();
                $table->string('bukti_bayar')->nullable();
            }
        });
    }
    public function down(): void {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropColumn(['pas_foto', 'kk', 'akta_lahir', 'kip', 'bukti_bayar', 'tempat_tinggal_lainnya']);
        });
    }
};