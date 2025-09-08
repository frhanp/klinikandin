<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Auth;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyakits = Penyakit::latest()->paginate(10);
        return view('admin.penyakit.index', compact('penyakits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_penyakit' => 'required|string|unique:penyakits,kode_penyakit|max:10',
            'nama_penyakit' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'pencegahan' => 'required|string',
            'pengobatan' => 'required|string',
        ]);

        Penyakit::create($request->all());

        $rolePrefix = Auth::user()->role;
        return redirect()->route($rolePrefix . '.penyakit.index')->with('success', 'Data penyakit berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyakit $penyakit)
    {
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate([
            'kode_penyakit' => 'required|string|max:10|unique:penyakits,kode_penyakit,' . $penyakit->id,
            'nama_penyakit' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'pencegahan' => 'required|string',
            'pengobatan' => 'required|string',

        ]);

        $penyakit->update($request->all());

        $rolePrefix = Auth::user()->role;
        return redirect()->route($rolePrefix . '.penyakit.index')->with('success', 'Data penyakit berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();

        $rolePrefix = Auth::user()->role;
        return redirect()->route($rolePrefix . '.penyakit.index')->with('success', 'Data penyakit berhasil dihapus.');
    }
}
