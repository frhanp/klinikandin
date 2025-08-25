<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman kontak dokter.
     */
    public function kontak()
    {
        // Data statis untuk kontak dokter dan lokasi praktek
        // Nanti ini bisa diubah menjadi data dinamis dari database
        $kontakDokter = [
            [
                'nama' => 'Klinik Andin (dr. H. Andi M. Sofyan)',
                'alamat' => 'Jl. Pangeran Hidayat, No. 123, Kota Gorontalo',
                'telepon' => '0812-3456-7890'
            ],
            [
                'nama' => 'Praktek Cabang Limboto',
                'alamat' => 'Jl. Jenderal Sudirman, No. 45, Limboto, Kab. Gorontalo',
                'telepon' => '0852-9876-5432'
            ],
            [
                'nama' => 'Praktek Cabang Telaga',
                'alamat' => 'Jl. Trans Sulawesi, Ruko Sebelah Bank, Telaga',
                'telepon' => '0821-4567-8901'
            ],
        ];

        return view('pages.kontak', compact('kontakDokter'));
    }
}
