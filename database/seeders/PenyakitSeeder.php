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
                'deskripsi' => 'Osteoarthritis adalah jenis radang sendi yang paling umum terjadi...',
                // 'solusi' diganti dengan 'pencegahan' dan 'pengobatan'
                'pencegahan' => 'Kelola berat badan, lakukan olahraga ringan seperti berenang atau bersepeda, fisioterapi.',
                'pengobatan' => 'Gunakan obat pereda nyeri sesuai anjuran dokter. Pada kasus yang parah, operasi penggantian sendi mungkin diperlukan.',
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Osteoporosis',
                'deskripsi' => 'Osteoporosis adalah kondisi di mana tulang menjadi lemah dan rapuh...',
                'pencegahan' => 'Konsumsi kalsium dan vitamin D yang cukup, lakukan latihan menahan beban (seperti berjalan kaki atau angkat beban ringan).',
                'pengobatan' => 'Hindari merokok dan konsumsi alkohol berlebihan, serta gunakan obat-obatan osteoporosis yang diresepkan dokter.',
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Rheumatoid Arthritis',
                'deskripsi' => 'Rheumatoid Arthritis adalah penyakit autoimun di mana sistem kekebalan tubuh menyerang lapisan sendi...',
                'pencegahan' => 'Fisioterapi dan terapi okupasi penting untuk menjaga fungsi sendi dan kualitas hidup.',
                'pengobatan' => 'Pengobatan dengan obat antirematik (DMARDs), obat anti-inflamasi, dan terapi biologis.',
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Skoliosis',
                'deskripsi' => 'Skoliosis adalah kelainan pada tulang belakang yang ditandai dengan bentuk tulang belakang yang melengkung...',
                'pencegahan' => 'Pemantauan rutin oleh dokter untuk kasus ringan dan fisioterapi untuk memperkuat otot punggung.',
                'pengobatan' => 'Untuk kasus sedang, penggunaan penyangga punggung (brace) mungkin diperlukan. Pembedahan dipertimbangkan untuk kelengkungan yang parah.',
            ],
        ];

        foreach ($penyakits as $penyakit) {
            Penyakit::create($penyakit);
        }
    }
}
