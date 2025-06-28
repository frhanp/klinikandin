<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        // Gunakan updateOrCreate untuk menghindari duplikasi data jika seeder dijalankan berulang kali
        // Method ini akan mencari user berdasarkan email, jika ada maka akan di-update, jika tidak ada maka akan dibuat.

        // Membuat Akun Admin
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'role' => 'admin',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
                'email_verified_at' => now(), // Langsung kita verifikasi emailnya
            ]
        );

        // Membuat Akun Dokter
        User::updateOrCreate(
            ['email' => 'dokter@gmail.com'],
            [
                'name' => 'Dr. Andini',
                'role' => 'dokter',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
                'email_verified_at' => now(),
            ]
        );

        // Membuat Akun Pengguna/Pasien
        User::updateOrCreate(
            ['email' => 'pasien@gmail.com'],
            [
                'name' => 'Pasien Satu',
                'role' => 'pengguna',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
                'email_verified_at' => now(),
            ]
        );
    }
}
