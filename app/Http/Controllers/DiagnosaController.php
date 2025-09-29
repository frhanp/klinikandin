<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DiagnosaHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    /**
     * Memulai atau mereset sesi diagnosa dialog.
     */
    public function start()
    {
        // Inisialisasi sesi diagnosa
        session([
            'diagnosa_forward' => [
                'possible_penyakit_ids' => Penyakit::pluck('id')->toArray(),
                'asked_gejala_ids' => [],
                'confirmed_gejala_ids' => [],
            ]
        ]);

        return redirect()->route('diagnosa.process');
    }

    /**
     * Memproses dan menampilkan pertanyaan dialog satu per satu.
     */
    public function process()
    {
        $diagnosaData = session('diagnosa_forward');

        if (!$diagnosaData) {
            return redirect()->route('diagnosa.start');
        }

        $possiblePenyakitIds = $diagnosaData['possible_penyakit_ids'];
        $askedGejalaIds = $diagnosaData['asked_gejala_ids'];

        // Kondisi berhenti: jika hanya tersisa 1 atau 0 kemungkinan penyakit
        if (count($possiblePenyakitIds) <= 1) {
            return redirect()->route('diagnosa.result');
        }
        
        // Cari pertanyaan terbaik berikutnya
        $nextGejala = Gejala::query()
            ->select('gejalas.id', 'gejalas.nama_gejala as pertanyaan', DB::raw('count(rules.penyakit_id) as frequency'))
            ->join('rules', 'gejalas.id', '=', 'rules.gejala_id')
            ->whereIn('rules.penyakit_id', $possiblePenyakitIds)
            ->whereNotIn('gejalas.id', $askedGejalaIds)
            ->groupBy('gejalas.id', 'gejalas.nama_gejala')
            ->orderByDesc('frequency')
            ->first();
        
        // Kondisi berhenti: jika tidak ada lagi pertanyaan yang bisa diajukan
        if (!$nextGejala) {
            return redirect()->route('diagnosa.result');
        }

        return view('diagnosa.process', compact('nextGejala'));
    }

    /**
     * Menerima jawaban dari pengguna dan memperbarui sesi.
     */
    public function answer(Request $request)
    {
        $request->validate([
            'gejala_id' => 'required|exists:gejalas,id',
            'jawaban' => 'required|in:ya,tidak',
        ]);

        $diagnosaData = session('diagnosa_forward');
        $gejalaId = $request->gejala_id;

        // Tambahkan gejala ke daftar yang sudah ditanyakan
        $diagnosaData['asked_gejala_ids'][] = $gejalaId;

        if ($request->jawaban == 'ya') {
            // Tambahkan ke gejala yang dikonfirmasi
            $diagnosaData['confirmed_gejala_ids'][] = $gejalaId;
            
            // Perbarui daftar kemungkinan penyakit
            $penyakitIdsWithGejala = DB::table('rules')
                ->where('gejala_id', $gejalaId)
                ->pluck('penyakit_id')->toArray();
            
            // Ambil irisan antara kemungkinan saat ini dan yang baru
            $diagnosaData['possible_penyakit_ids'] = array_intersect(
                $diagnosaData['possible_penyakit_ids'],
                $penyakitIdsWithGejala
            );
        }

        session(['diagnosa_forward' => $diagnosaData]);

        return redirect()->route('diagnosa.process');
    }

    /**
     * Menampilkan hasil akhir diagnosa.
     */
    public function result()
    {
        $diagnosaData = session('diagnosa_forward');
        if (!$diagnosaData) {
            return redirect()->route('diagnosa.start');
        }
        
        $confirmedGejalaIds = $diagnosaData['confirmed_gejala_ids'];
        $possiblePenyakitIds = $diagnosaData['possible_penyakit_ids'];
        
        $penyakitTerbaik = Penyakit::whereIn('id', $possiblePenyakitIds)->get();
        $gejalaTerpilih = Gejala::whereIn('id', $confirmedGejalaIds)->get();

        // Simpan ke riwayat jika ada hasil
        if ($penyakitTerbaik->isNotEmpty()) {
            DiagnosaHistory::create([
                'user_id' => Auth::id(),
                'penyakit_id' => $penyakitTerbaik->first()->id,
                'gejala_terpilih' => json_encode($confirmedGejalaIds),
                'hasil_skor' => 100, // Skor tidak relevan di alur ini, tapi diisi 100
                'penyakit_terbaik_lainnya' => json_encode($penyakitTerbaik->pluck('id')->toArray())
            ]);
        }
        
        session()->forget('diagnosa_forward');
        
        return view('diagnosa.hasil', compact('penyakitTerbaik', 'gejalaTerpilih'));
    }

    public function riwayat()
    {
        $riwayat = DiagnosaHistory::where('user_id', Auth::id())
            ->with('penyakit')
            ->latest()
            ->paginate(10);
        return view('diagnosa.riwayat', compact('riwayat'));
    }
}
