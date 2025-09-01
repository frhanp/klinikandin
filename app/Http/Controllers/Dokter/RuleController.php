<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RuleController extends Controller
{
    /**
     * Menampilkan daftar penyakit untuk dipilih.
     */
    public function index()
    {
        $penyakits = Penyakit::orderBy('kode_penyakit')->get();
        return view('admin.rule.index', compact('penyakits'));
    }

    /**
     * Menampilkan form untuk mengedit rule berdasarkan penyakit yang dipilih.
     */
    public function edit(Penyakit $penyakit)
    {
        $gejalas = Gejala::all();

        // =================================================================
        // ===== INI BAGIAN YANG HILANG DAN SEKARANG SUDAH DIPERBAIKI =====
        // Mengambil semua ID gejala yang sudah berelasi dengan penyakit ini
        $penyakitGejalaIds = $penyakit->gejalas->pluck('id')->toArray();
        // =================================================================

        return view('admin.rule.edit', compact('penyakit', 'gejalas', 'penyakitGejalaIds'));
    }

    /**
     * Mengupdate rule untuk penyakit yang dipilih.
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate([
            'gejala_ids' => 'nullable|array',
            'gejala_ids.*' => 'exists:gejalas,id',
        ]);

        // Gunakan sync() untuk sinkronisasi relasi
        // Method ini akan otomatis menambah/menghapus relasi di tabel pivot 'rules'
        $penyakit->gejalas()->sync($request->gejala_ids);

        // =================================================================
        // ===== INI BAGIAN YANG DIPERBAIKI =====
        // Tentukan rute kembali berdasarkan peran pengguna yang sedang login
        $returnRoute = Auth::user()->role == 'admin' ? 'admin.rule.index' : 'dokter.rule.index';
        // =================================================================

        return redirect()->route($returnRoute)->with('success', 'Rule base berhasil diperbarui.');
    }
}
