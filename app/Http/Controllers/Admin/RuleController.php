<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Http\Request;

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
        $gejalas = Gejala::orderBy('kode_gejala')->get();
        // Ambil ID gejala yang sudah berelasi dengan penyakit ini
        $gejalaPenyakit = $penyakit->gejalas->pluck('id')->toArray();

        return view('admin.rule.edit', compact('penyakit', 'gejalas', 'gejalaPenyakit'));
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

        return redirect()->route('admin.rule.index')
            ->with('success', 'Basis aturan untuk penyakit ' . $penyakit->nama_penyakit . ' berhasil diperbarui.');
    }
}
