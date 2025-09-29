<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Penyakit::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $penyakits = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Osteoporosis',
                'deskripsi' => 'Kondisi di mana tulang menjadi lemah dan rapuh, sehingga sangat rentan patah akibat penurunan kepadatan tulang.',
                'pencegahan' => 'Pastikan asupan kalsium dan vitamin D tercukupi, lakukan latihan menahan beban secara teratur, dan hindari merokok serta konsumsi alkohol berlebihan.',
                'pengobatan' => 'Pengobatan dengan bifosfonat, terapi hormon, atau suplemen kalsium dan vitamin D sesuai resep dokter.'
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Osteoartritis',
                'deskripsi' => 'Jenis radang sendi yang terjadi ketika tulang rawan pelindung di ujung tulang aus seiring waktu, menyebabkan nyeri dan kaku.',
                'pencegahan' => 'Jaga berat badan ideal, hindari cedera pada sendi, dan lakukan olahraga ringan untuk memperkuat otot di sekitar sendi.',
                'pengobatan' => 'Fisioterapi, obat pereda nyeri (analgesik), obat anti-inflamasi nonsteroid (OAINS), dan pada kasus berat, operasi penggantian sendi.'
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Osteomyelitis',
                'deskripsi' => 'Infeksi pada tulang yang disebabkan oleh bakteri atau jamur, yang bisa menyebar melalui aliran darah atau dari jaringan terdekat yang terinfeksi.',
                'pencegahan' => 'Jaga kebersihan luka dengan baik, hindari merokok, dan kelola kondisi medis seperti diabetes untuk mengurangi risiko infeksi.',
                'pengobatan' => 'Pemberian antibiotik jangka panjang (melalui infus atau oral) dan terkadang memerlukan prosedur pembedahan untuk membersihkan area tulang yang terinfeksi.'
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Demam Reumatik',
                'deskripsi' => 'Kondisi peradangan yang dapat mempengaruhi jantung, sendi, otak, dan kulit, yang biasanya muncul sebagai komplikasi dari radang tenggorokan akibat bakteri streptokokus.',
                'pencegahan' => 'Pengobatan yang tuntas untuk radang tenggorokan akibat bakteri streptokokus dengan antibiotik.',
                'pengobatan' => 'Obat anti-inflamasi untuk meredakan peradangan, antibiotik untuk menghilangkan sisa bakteri, dan obat antikejang jika diperlukan.'
            ],
            [
                'kode_penyakit' => 'P05',
                'nama_penyakit' => 'Fraktur Vertebra',
                'deskripsi' => 'Kondisi patah atau retaknya satu atau lebih tulang belakang (vertebra), seringkali disebabkan oleh trauma atau kondisi tulang yang lemah seperti osteoporosis.',
                'pencegahan' => 'Tingkatkan kekuatan tulang dengan asupan kalsium dan vitamin D, gunakan alat pelindung diri saat beraktivitas berisiko, dan hindari mengangkat beban berat dengan postur yang salah.',
                'pengobatan' => 'Istirahat, penggunaan penyangga punggung (brace), fisioterapi, dan obat pereda nyeri. Pembedahan mungkin diperlukan untuk kasus yang parah atau menyebabkan instabilitas tulang belakang.'
            ],
            [
                'kode_penyakit' => 'P06',
                'nama_penyakit' => 'Spondylitis TB',
                'deskripsi' => 'Infeksi tuberkulosis (TBC) yang menyerang tulang belakang, menyebabkan kerusakan tulang, nyeri punggung, dan potensi kelainan bentuk tulang belakang (gibbus).',
                'pencegahan' => 'Vaksinasi BCG pada bayi dan pengobatan tuntas bagi penderita TBC paru untuk mencegah penyebaran ke tulang.',
                'pengobatan' => 'Terapi antibiotik anti-tuberkulosis (OAT) jangka panjang (9-12 bulan). Pembedahan mungkin diperlukan jika ada kerusakan saraf atau kelainan bentuk yang signifikan.'
            ],
        ];

        foreach ($penyakits as $penyakit) {
            Penyakit::create($penyakit);
        }
    }
}
