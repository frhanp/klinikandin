<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiagnosaHistory;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Ambil data diagnosa 12 bulan terakhir
        $stats = DiagnosaHistory::query()
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%Y-%m') as bulan"),
                'penyakit_id',
                DB::raw('count(*) as jumlah')
            )
            ->where('created_at', '>=', now()->subYear())
            ->groupBy('bulan', 'penyakit_id')
            ->orderBy('bulan')
            ->with('penyakit:id,nama_penyakit') // Eager load untuk efisiensi
            ->get();

        // 2. Siapkan data untuk format Chart.js
        $labels = $stats->pluck('bulan')->unique()->sort()->values();
        $penyakits = $stats->pluck('penyakit.nama_penyakit')->unique()->values();
        $datasets = [];
        $colors = ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(153, 102, 255, 0.6)'];

        foreach ($penyakits as $index => $namaPenyakit) {
            $data = [];
            foreach ($labels as $label) {
                $jumlah = $stats->first(function ($item) use ($label, $namaPenyakit) {
                    return $item->bulan === $label && $item->penyakit->nama_penyakit === $namaPenyakit;
                })->jumlah ?? 0;
                $data[] = $jumlah;
            }

            $datasets[] = [
                'label' => $namaPenyakit,
                'data' => $data,
                'backgroundColor' => $colors[$index % count($colors)],
                'borderColor' => str_replace('0.6', '1', $colors[$index % count($colors)]),
                'borderWidth' => 1
            ];
        }

        // 3. Konversi ke format JSON untuk dikirim ke view
        $chartData = json_encode(['labels' => $labels, 'datasets' => $datasets]);

        return view('dokter.dashboard', compact('chartData'));
    }
}
