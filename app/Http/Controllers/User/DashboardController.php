<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiagnosaHistory;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil 3 riwayat diagnosa terakhir dari pengguna yang sedang login
        $riwayatTerakhir = DiagnosaHistory::where('user_id', Auth::id())
                                          ->with('penyakit') // Eager load untuk efisiensi
                                          ->latest() // Urutkan dari yang terbaru
                                          ->take(3) // Ambil 3 data saja
                                          ->get();

        return view('dashboard', compact('riwayatTerakhir'));
    }
}
