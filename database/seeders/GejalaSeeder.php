<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;
use Illuminate\Support\Facades\Schema;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nonaktifkan foreign key check
        Schema::disableForeignKeyConstraints();

        // Hapus data lama
        Gejala::truncate();

        // Aktifkan kembali foreign key check
        Schema::enableForeignKeyConstraints();

        $gejalas = [
            ['kode_gejala' => 'G01', 'nama_gejala' => 'Nyeri pada sendi saat bergerak'],
            ['kode_gejala' => 'G02', 'nama_gejala' => 'Kaku pada sendi di pagi hari atau setelah lama tidak bergerak'],
            ['kode_gejala' => 'G03', 'nama_gejala' => 'Pembengkakan pada area sendi'],
            ['kode_gejala' => 'G04', 'nama_gejala' => 'Terdengar suara gemeretak (krepitasi) saat sendi digerakkan'],
            ['kode_gejala' => 'G05', 'nama_gejala' => 'Penurunan tinggi badan secara bertahap'],
            ['kode_gejala' => 'G06', 'nama_gejala' => 'Postur tubuh menjadi bungkuk'],
            ['kode_gejala' => 'G07', 'nama_gejala' => 'Nyeri punggung yang disebabkan oleh tulang belakang yang retak'],
            ['kode_gejala' => 'G08', 'nama_gejala' => 'Tulang menjadi mudah patah bahkan karena benturan ringan'],
            ['kode_gejala' => 'G09', 'nama_gejala' => 'Nyeri dan kaku pada banyak sendi secara simetris (kiri dan kanan)'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Kelelahan, demam, dan penurunan berat badan tanpa sebab yang jelas'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Bahu atau pinggul terlihat tidak sejajar'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Tulang belikat tampak lebih menonjol di satu sisi'],
        ];

        foreach ($gejalas as $gejala) {
            Gejala::create($gejala);
        }
    }
}
