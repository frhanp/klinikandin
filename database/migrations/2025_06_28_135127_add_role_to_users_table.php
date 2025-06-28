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
        Schema::table('users', function (Blueprint $table) {
            // Kita tambahkan kolom 'role' setelah kolom 'password'
            // Role bisa berisi 'admin', 'dokter', atau 'pengguna'
            // Defaultnya adalah 'pengguna'
            $table->string('role')->after('password')->default('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Ini untuk membatalkan migrasi jika diperlukan
            $table->dropColumn('role');
        });
    }
};
