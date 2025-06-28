<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Schema;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Penyakit::truncate();
        Schema::enableForeignKeyConstraints();

        $penyakits = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Osteoarthritis',
                'deskripsi' => 'Osteoarthritis adalah jenis radang sendi yang paling umum terjadi. Kondisi ini menyebabkan tulang rawan di ujung tulang aus seiring waktu, mengakibatkan rasa sakit dan kaku pada sendi.',
                'solusi' => 'Kelola berat badan, lakukan olahraga ringan seperti berenang atau bersepeda, fisioterapi, dan gunakan obat pereda nyeri sesuai anjuran dokter. Pada kasus yang parah, operasi penggantian sendi mungkin diperlukan.',
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Osteoporosis',
                'deskripsi' => 'Osteoporosis adalah kondisi di mana tulang menjadi lemah dan rapuh, sehingga sangat rentan patah. Penurunan kepadatan tulang ini sering kali tidak disadari hingga terjadi fraktur.',
                'solusi' => 'Konsumsi kalsium dan vitamin D yang cukup, lakukan latihan menahan beban (seperti berjalan kaki atau angkat beban ringan), hindari merokok dan konsumsi alkohol berlebihan, serta gunakan obat-obatan osteoporosis yang diresepkan dokter.',
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Rheumatoid Arthritis',
                'deskripsi' => 'Rheumatoid Arthritis adalah penyakit autoimun di mana sistem kekebalan tubuh menyerang lapisan sendi, menyebabkan peradangan, nyeri, dan kerusakan sendi jangka panjang.',
                'solusi' => 'Pengobatan dengan obat antirematik (DMARDs), obat anti-inflamasi, dan terapi biologis. Fisioterapi dan terapi okupasi juga penting untuk menjaga fungsi sendi dan kualitas hidup.',
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Skoliosis',
                'deskripsi' => 'Skoliosis adalah kelainan pada tulang belakang yang ditandai dengan bentuk tulang belakang yang melengkung secara tidak normal ke samping, seperti huruf "C" atau "S".',
                'solusi' => 'Pemantauan rutin oleh dokter untuk kasus ringan. Untuk kasus sedang, penggunaan penyangga punggung (brace) mungkin diperlukan. Fisioterapi untuk memperkuat otot punggung. Pembedahan dipertimbangkan untuk kelengkungan yang parah.',
            ],
        ];

        foreach ($penyakits as $penyakit) {
            Penyakit::create($penyakit);
        }
    }
}
