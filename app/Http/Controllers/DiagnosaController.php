<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DiagnosaHistory;
use Illuminate\Support\Facades\Auth;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('diagnosa.index', compact('gejalas'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'gejala_ids' => 'required|array|min:1',
        ], [
            'gejala_ids.required' => 'Silakan pilih minimal satu gejala untuk memulai diagnosa.',
        ]);

        $gejala_ids = $request->input('gejala_ids', []);

        if (count($gejala_ids) > 10) {
            return redirect()->back()->with('error', 'Anda memilih terlalu banyak gejala. Mohon pilih hanya gejala yang paling relevan (maksimal 10).');
        }
        $penyakits = Penyakit::with('gejalas')->get();
        $matches = [];

        foreach ($penyakits as $penyakit) {
            $gejalaCocokCount = $penyakit->gejalas->whereIn('id', $gejala_ids)->count();
            $totalGejala = $penyakit->gejalas->count();

            if ($totalGejala > 0) {
                $skor = $gejalaCocokCount / ($totalGejala + count($gejala_ids) - $gejalaCocokCount);
                if ($skor > 0) {
                    $matches[] = [
                        'penyakit' => $penyakit,
                        'skor' => $skor,
                    ];
                }
            }
        }

        if (!empty($matches)) {
            usort($matches, fn($a, $b) => $b['skor'] <=> $a['skor']);
            $bestMatch = $matches[0];

            $diagnosaHistory = DiagnosaHistory::create([
                'user_id' => Auth::id(),
                'penyakit_id' => $bestMatch['penyakit']->id,
                'gejala_terpilih' => json_encode($gejala_ids),
                'hasil_skor' => $bestMatch['skor'] * 100, // <--- KODE SUDAH DIPERBAIKI
            ]);

            return redirect()->route('diagnosa.hasil', $diagnosaHistory->id);
        } else {
            return redirect()->route('diagnosa.index')->with('error', 'Tidak ditemukan penyakit yang sesuai dengan gejala yang Anda pilih.');
        }
    }

    public function hasil(DiagnosaHistory $diagnosaHistory)
    {
        if ($diagnosaHistory->user_id !== Auth::id()) {
            abort(403);
        }

        $diagnosaHistory->load('penyakit');

        $gejalaTerpilihIds = json_decode($diagnosaHistory->gejala_terpilih, true);
        $gejalaTerpilih = Gejala::whereIn('id', $gejalaTerpilihIds)->get();

        return view('diagnosa.hasil', compact('diagnosaHistory', 'gejalaTerpilih'));
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
