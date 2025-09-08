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
        Schema::table('penyakits', function (Blueprint $table) {
            // 1. Tambahkan dua kolom baru setelah kolom 'deskripsi'
            $table->text('pencegahan')->after('deskripsi')->nullable();
            $table->text('pengobatan')->after('pencegahan')->nullable();

            // 2. Hapus kolom 'solusi' yang lama
            $table->dropColumn('solusi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penyakits', function (Blueprint $table) {
            // Logika untuk membatalkan migrasi jika diperlukan
            $table->text('solusi')->after('deskripsi')->nullable();
            $table->dropColumn(['pencegahan', 'pengobatan']);
        });
    }
};
