<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Urutan ini penting!
        // User dulu, lalu data master (Gejala, Penyakit), baru Rule.
        $this->call([
            UserRoleSeeder::class,
            GejalaSeeder::class,
            PenyakitSeeder::class,
            RuleSeeder::class,
        ]);
    }
}
