<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Rule;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Rule::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Format: [kode_penyakit, [kode_gejala_1, kode_gejala_2, ...]]
        $rules = [
            ['P01', ['G01', 'G02', 'G03', 'G04', 'G05', 'G06']],
            ['P02', ['G07', 'G08', 'G09', 'G10', 'G11']],
            ['P03', ['G12', 'G13', 'G14', 'G15', 'G16', 'G17']],
            ['P04', ['G14', 'G18', 'G19', 'G20']],
            ['P05', ['G21', 'G22', 'G02', 'G23', 'G03', 'G24']],
            ['P06', ['G25', 'G26', 'G27', 'G28', 'G29', 'G30', 'G31', 'G32']],
        ];

        foreach ($rules as $rule) {
            $penyakitId = \App\Models\Penyakit::where('kode_penyakit', $rule[0])->first()->id;
            foreach ($rule[1] as $kodeGejala) {
                $gejalaId = \App\Models\Gejala::where('kode_gejala', $kodeGejala)->first()->id;
                Rule::create([
                    'penyakit_id' => $penyakitId,
                    'gejala_id' => $gejalaId,
                ]);
            }
        }
    }
}
