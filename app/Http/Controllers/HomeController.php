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
        $kontakDokter = [
            [
                'nama_dokter' => 'Dr. Irma Suryani Darise, Sp.OT. Subsp. OTB(K)',
                'tempat_praktek' => 'Apotek INSYIRAH',
                'map_url' => 'https://maps.app.goo.gl/Lw3G6GnJX6e6r6XF7?g_st=aw',
                'foto' => asset('images/doctors/drirma.png') 
            ],
            [
                'nama_dokter' => 'Dr. Chairul Wahjudi, M.Kes, Sp.OT(K) Hip&Knee',
                'tempat_praktek' => 'Klinik Pratama Mulia',
                'map_url' => 'https://maps.app.goo.gl/i34n2JoStnra6e7GA?g_st=aw',
                'foto' => "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'%3E%3Cpath fill-rule='evenodd' d='M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z' clip-rule='evenodd' /%3E%3C/svg%3E"
            ],
            [
                'nama_dokter' => 'Dr. Irawan Huntoyungo, M.Kes, Sp.OT',
                'tempat_praktek' => 'APOTEK ORTHOMEDIKA',
                'map_url' => 'https://maps.app.goo.gl/Gq9mAp8HyzwpVrJG8?g_st=aw',
                'foto' => asset('images/doctors/drirawan.png')
            ],
        ];

        return view('pages.kontak', compact('kontakDokter'));
    }
}
