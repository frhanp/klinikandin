<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Support\Facades\Auth;
use App\Models\DiagnosaHistory;

class BackwardDiagnosaController extends Controller
{
     /**
     * Menampilkan halaman awal untuk memilih penyakit (hipotesis).
     */
    public function index()
    {
        $penyakits = Penyakit::orderBy('nama_penyakit')->get();
        return view('diagnosa-backward.index', compact('penyakits'));
    }

    /**
     * Memulai proses backward chaining.
     * Menerima penyakit yang dipilih dan menyiapkan sesi diagnosa.
     */
    public function start(Request $request)
    {
        $request->validate(['penyakit_id' => 'required|exists:penyakits,id']);

        $penyakit = Penyakit::with('gejalas')->findOrFail($request->penyakit_id);
        $gejalaIds = $penyakit->gejalas->pluck('id')->toArray();

        // Jika penyakit tidak memiliki gejala sama sekali
        if (empty($gejalaIds)) {
            return redirect()->route('diagnosa-backward.index')->with('error', 'Penyakit yang dipilih tidak memiliki gejala terkait di dalam basis aturan.');
        }
        
        // Simpan state diagnosa di session
        session([
            'backward_diagnosa' => [
                'penyakit_id' => $penyakit->id,
                'gejala_ids' => $gejalaIds,
                'current_gejala_index' => 0,
                'jawaban_gejala' => [], // Untuk menyimpan jawaban 'ya'
            ]
        ]);

        return redirect()->route('diagnosa-backward.process');
    }

    /**
     * Menampilkan pertanyaan gejala satu per satu.
     */
    public function process()
    {
        $diagnosaData = session('backward_diagnosa');

        // Jika sesi tidak ada, kembalikan ke awal
        if (!$diagnosaData) {
            return redirect()->route('diagnosa-backward.index');
        }

        $gejalaIndex = $diagnosaData['current_gejala_index'];
        $gejalaIds = $diagnosaData['gejala_ids'];

        // Jika semua gejala sudah ditanyakan, hitung hasilnya
        if ($gejalaIndex >= count($gejalaIds)) {
            return redirect()->route('diagnosa-backward.result');
        }

        // Ambil gejala saat ini untuk ditanyakan
        $currentGejalaId = $gejalaIds[$gejalaIndex];
        $gejala = \App\Models\Gejala::find($currentGejalaId);
        $penyakit = Penyakit::find($diagnosaData['penyakit_id']);
        $progress = round((($gejalaIndex + 1) / count($gejalaIds)) * 100);

        return view('diagnosa-backward.process', compact('gejala', 'penyakit', 'progress'));
    }

    /**
     * Menyimpan jawaban dari pengguna dan lanjut ke gejala berikutnya.
     */
    public function answer(Request $request)
    {
        $request->validate(['jawaban' => 'required|in:ya,tidak']);

        $diagnosaData = session('backward_diagnosa');
        if (!$diagnosaData) {
            return redirect()->route('diagnosa-backward.index');
        }

        // Simpan jawaban jika 'ya'
        if ($request->jawaban == 'ya') {
            $currentGejalaId = $diagnosaData['gejala_ids'][$diagnosaData['current_gejala_index']];
            $diagnosaData['jawaban_gejala'][] = $currentGejalaId;
        }

        // Lanjut ke gejala berikutnya
        $diagnosaData['current_gejala_index']++;
        session(['backward_diagnosa' => $diagnosaData]);

        return redirect()->route('diagnosa-backward.process');
    }

    /**
     * Menampilkan hasil akhir dari proses backward chaining.
     */
    /**
     * Menampilkan hasil akhir dari proses backward chaining.
     */
    public function result()
    {
        $diagnosaData = session('backward_diagnosa');
        if (!$diagnosaData) {
            return redirect()->route('diagnosa-backward.index');
        }

        $penyakit = Penyakit::findOrFail($diagnosaData['penyakit_id']);
        $totalGejalaPenyakit = count($diagnosaData['gejala_ids']);
        $gejalaCocokIds = $diagnosaData['jawaban_gejala'];
        $gejalaCocokCount = count($gejalaCocokIds);
        
        // Ambil data model Gejala berdasarkan ID yang dijawab "ya"
        $gejalaTerpilih = \App\Models\Gejala::whereIn('id', $gejalaCocokIds)->get();

        $skor = ($totalGejalaPenyakit > 0) ? ($gejalaCocokCount / $totalGejalaPenyakit) * 100 : 0;
        $terbukti = $skor > 60;

        if ($terbukti) {
            DiagnosaHistory::create([
                'user_id' => Auth::id(),
                'penyakit_id' => $penyakit->id,
                'gejala_terpilih' => json_encode($gejalaCocokIds),
                'hasil_skor' => $skor,
            ]);
        }

        session()->forget('backward_diagnosa');

        // Kirim semua data yang diperlukan ke view
        return view('diagnosa-backward.hasil', compact('penyakit', 'terbukti', 'skor', 'gejalaTerpilih'));
    }
}
