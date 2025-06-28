<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DiagnosaHistory;
use Illuminate\Support\Facades\Auth;

class DiagnosaController extends Controller
{
    // Menampilkan halaman form diagnosa
    public function index()
    {
        $gejalas = Gejala::orderBy('kode_gejala')->get();
        return view('diagnosa.index', compact('gejalas'));
    }

    // Memproses data gejala yang dipilih user
    public function process(Request $request)
    {
        $request->validate([
            'gejala_ids' => 'required|array|min:1',
            'gejala_ids.*' => 'exists:gejalas,id',
        ]);

        $gejalaTerpilihIds = $request->input('gejala_ids');
        $gejalaTerpilihCount = count($gejalaTerpilihIds);

        // Mengambil semua penyakit beserta relasi gejalanya
        $penyakits = Penyakit::with('gejalas')->get();

        $hasilDiagnosa = [];

        foreach ($penyakits as $penyakit) {
            $gejalaPenyakitIds = $penyakit->gejalas->pluck('id')->toArray();
            $gejalaCocok = array_intersect($gejalaTerpilihIds, $gejalaPenyakitIds);
            $jumlahGejalaCocok = count($gejalaCocok);
            $jumlahGejalaPenyakit = count($gejalaPenyakitIds);

            if ($jumlahGejalaPenyakit > 0) {
                // Formula sederhana: (jumlah cocok / jumlah gejala penyakit)
                $skor = $jumlahGejalaCocok / $jumlahGejalaPenyakit;
            } else {
                $skor = 0;
            }

            if ($skor > 0) {
                 $hasilDiagnosa[] = [
                    'penyakit' => $penyakit,
                    'skor' => $skor,
                ];
            }
        }
        
        // Urutkan hasil dari skor tertinggi
        if(!empty($hasilDiagnosa)) {
            usort($hasilDiagnosa, function ($a, $b) {
                return $b['skor'] <=> $a['skor'];
            });
    
            $penyakitTeratas = $hasilDiagnosa[0]['penyakit'];
            $skorTertinggi = $hasilDiagnosa[0]['skor'];
    
            // Simpan riwayat diagnosa
            $history = DiagnosaHistory::create([
                'user_id' => Auth::id(),
                'penyakit_id' => $penyakitTeratas->id,
                'gejala_terpilih' => json_encode($gejalaTerpilihIds),
                'hasil_skor' => $skorTertinggi,
            ]);
    
            return redirect()->route('diagnosa.hasil', $history->id);

        } else {
            // Jika tidak ada penyakit yang cocok sama sekali
            return redirect()->route('diagnosa.index')->with('error', 'Tidak ditemukan penyakit yang sesuai dengan gejala yang Anda pilih.');
        }
    }

    // Menampilkan halaman hasil diagnosa
    public function hasil(DiagnosaHistory $diagnosaHistory)
    {
        // Pastikan user hanya bisa melihat riwayatnya sendiri
        if ($diagnosaHistory->user_id !== Auth::id()) {
            abort(403);
        }
        
        $diagnosaHistory->load('penyakit'); // Eager load relasi penyakit
        return view('diagnosa.hasil', compact('diagnosaHistory'));
    }

    // Menampilkan halaman riwayat diagnosa
    public function riwayat()
    {
        $riwayat = DiagnosaHistory::where('user_id', Auth::id())
            ->with('penyakit')
            ->latest()
            ->paginate(10);
            
        return view('diagnosa.riwayat', compact('riwayat'));
    }
}
