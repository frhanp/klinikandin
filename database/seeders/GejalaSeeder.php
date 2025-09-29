<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Gejala::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $gejalas = [
            ['kode_gejala' => 'G01', 'nama_gejala' => 'Apakah pasien sering merasakan nyeri pada punggung atau tulang belakang?'],
            ['kode_gejala' => 'G02', 'nama_gejala' => 'Apakah postur tubuh pasien tampak membungkuk?'],
            ['kode_gejala' => 'G03', 'nama_gejala' => 'Apakah tinggi badan pasien berkurang dari sebelumnya?'],
            ['kode_gejala' => 'G04', 'nama_gejala' => 'Apakah tulang pasien mudah patah meskipun hanya terkena benturan ringan?'],
            ['kode_gejala' => 'G05', 'nama_gejala' => 'Apakah pasien mengalami menopause?'],
            ['kode_gejala' => 'G06', 'nama_gejala' => 'Apakah usia pasien lebih dari 45 tahun?'],
            ['kode_gejala' => 'G07', 'nama_gejala' => 'Apakah sendi pasien mengalami pembengkakan?'],
            ['kode_gejala' => 'G08', 'nama_gejala' => 'Apakah pasien merasakan kekakuan pada sendi, terutama di pagi hari atau setelah duduk lama?'],
            ['kode_gejala' => 'G09', 'nama_gejala' => 'Apakah pasien mengalami keterbatasan dalam menggerakkan sendi?'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Apakah terdengar bunyi “krek” (krepitasi) saat sendi digerakkan?'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Apakah rasa nyeri sendi meningkat ketika digerakkan?'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Apakah pasien memiliki riwayat luka atau operasi pada tulang/sendi?'],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Apakah terdapat bengkak dan kemerahan di area yang terinfeksi?'],
            ['kode_gejala' => 'G14', 'nama_gejala' => 'Apakah pasien mengalami demam?'],
            ['kode_gejala' => 'G15', 'nama_gejala' => 'Apakah pasien merasa lemah, lesu, atau tidak enak badan?'],
            ['kode_gejala' => 'G16', 'nama_gejala' => 'Apakah rasa sakit muncul bila bagian yang sakit ditekan?'],
            ['kode_gejala' => 'G17', 'nama_gejala' => 'Apakah ada nanah yang keluar melalui kulit (sinus)?'],
            ['kode_gejala' => 'G18', 'nama_gejala' => 'Apakah terjadi pembengkakan, kemerahan, dan nyeri pada sendi (siku, lutut, pergelangan tangan/kaki)?'],
            ['kode_gejala' => 'G19', 'nama_gejala' => 'Apakah nyeri sendi menjalar ke sendi lain?'],
            ['kode_gejala' => 'G20', 'nama_gejala' => 'Apakah muncul ruam kemerahan pada kulit?'],
            ['kode_gejala' => 'G21', 'nama_gejala' => 'Apakah pasien mengalami nyeri pada area leher atau punggung?'],
            ['kode_gejala' => 'G22', 'nama_gejala' => 'Apakah pasien sering merasa kesemutan atau mati rasa?'],
            ['kode_gejala' => 'G23', 'nama_gejala' => 'Apakah pasien pernah mengalami kejang otot yang tidak terkendali?'],
            ['kode_gejala' => 'G24', 'nama_gejala' => 'Apakah terdapat gejala saraf terjepit (kelemahan atau kelumpuhan)?'],
            ['kode_gejala' => 'G25', 'nama_gejala' => 'Apakah pasien memiliki riwayat TBC atau batuk lama yang disertai darah?'],
            ['kode_gejala' => 'G26', 'nama_gejala' => 'Apakah pasien merasakan nyeri punggung pada bagian tertentu?'],
            ['kode_gejala' => 'G27', 'nama_gejala' => 'Apakah berat badan pasien menurun?'],
            ['kode_gejala' => 'G28', 'nama_gejala' => 'Apakah pasien sering merasa lelah berlebihan?'],
            ['kode_gejala' => 'G29', 'nama_gejala' => 'Apakah ada kekakuan pada tulang belakang?'],
            ['kode_gejala' => 'G30', 'nama_gejala' => 'Apakah terdapat benjolan atau pembengkakan di area punggung?'],
            ['kode_gejala' => 'G31', 'nama_gejala' => 'Apakah nafsu makan pasien menurun?'],
            ['kode_gejala' => 'G32', 'nama_gejala' => 'Apakah pasien sering berkeringat di malam hari?'],
        ];

        foreach ($gejalas as $gejala) {
            Gejala::create($gejala);
        }
    }
}
