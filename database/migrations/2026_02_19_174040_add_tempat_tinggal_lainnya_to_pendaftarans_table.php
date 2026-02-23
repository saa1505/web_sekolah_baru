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
            // Tambahkan kolom baru setelah kolom tempat_tinggal
            $table->string('tempat_tinggal_lainnya')->nullable()->after('tempat_tinggal');
        });
    }

    public function down(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropColumn('tempat_tinggal_lainnya');
        });
    }
};
