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
                'foto' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=2070&auto=format&fit=crop'
            ],
            [
                'nama_dokter' => 'Dr. Chairul Wahjudi, M.Kes, Sp.OT(K) Hip&Knee',
                'tempat_praktek' => 'Klinik Pratama Mulia',
                'map_url' => 'https://maps.app.goo.gl/i34n2JoStnra6e7GA?g_st=aw',
                'foto' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?q=80&w=2070&auto=format&fit=crop'
            ],
            [
                'nama_dokter' => 'Dr. Irawan Huntoyungo, M.Kes, Sp.OT',
                'tempat_praktek' => 'APOTEK ORTHOMEDIKA',
                'map_url' => 'https://maps.app.goo.gl/Gq9mAp8HyzwpVrJG8?g_st=aw',
                'foto' => 'https://images.unsplash.com/photo-1537368910025-700350796527?q=80&w=2070&auto=format&fit=crop'
            ],
        ];

        return view('pages.kontak', compact('kontakDokter'));
    }
}
