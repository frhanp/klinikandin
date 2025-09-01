<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\DiagnosaHistory;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // 1. Ambil semua data statistik
        $stats = [
            'pengguna' => User::where('role', 'pengguna')->count(),
            'dokter' => User::where('role', 'dokter')->count(),
            'penyakit' => Penyakit::count(),
            'gejala' => Gejala::count(),
            'total_diagnosa' => DiagnosaHistory::count(),
        ];

        // 2. Ambil 5 aktivitas diagnosa terakhir
        $aktivitasTerakhir = DiagnosaHistory::with(['user', 'penyakit'])
                                            ->latest()
                                            ->take(5)
                                            ->get();

        return view('admin.dashboard', compact('stats', 'aktivitasTerakhir'));
    }
}
