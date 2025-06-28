<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('rules')->truncate();
        Schema::enableForeignKeyConstraints();

        // Ambil semua penyakit dan gejala
        $penyakits = Penyakit::all()->keyBy('kode_penyakit');
        $gejalas = Gejala::all()->keyBy('kode_gejala');

        // Definisikan aturan: [Kode Penyakit => [Array Kode Gejala]]
        $rules = [
            'P01' => ['G01', 'G02', 'G03', 'G04'], // Osteoarthritis
            'P02' => ['G05', 'G06', 'G07', 'G08'], // Osteoporosis
            'P03' => ['G02', 'G03', 'G09', 'G10'], // Rheumatoid Arthritis
            'P04' => ['G07', 'G11', 'G12'],       // Skoliosis
        ];

        foreach ($rules as $kode_penyakit => $kode_gejalas) {
            if (!isset($penyakits[$kode_penyakit])) continue; // Lewati jika penyakit tidak ada
            
            $penyakit = $penyakits[$kode_penyakit];
            
            $gejalaIds = [];
            foreach ($kode_gejalas as $kode_gejala) {
                if (isset($gejalas[$kode_gejala])) {
                    $gejalaIds[] = $gejalas[$kode_gejala]->id;
                }
            }
            
            // Gunakan attach() untuk menambahkan relasi di tabel pivot
            $penyakit->gejalas()->attach($gejalaIds);
        }
    }
}
