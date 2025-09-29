<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use Illuminate\Support\Facades\Auth;
class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejalas = Gejala::latest()->paginate(10);
        return view('admin.gejala.index', compact('gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|string|unique:gejalas,kode_gejala|max:10',
            'nama_gejala' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
        ]);

        Gejala::create($request->all());

        $rolePrefix = Auth::user()->role;
        return redirect()->route($rolePrefix . '.gejala.index')->with('success', 'Data gejala berhasil ditambahkan.');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gejala $gejala)
    {
        $request->validate([
            'kode_gejala' => 'required|string|max:10|unique:gejalas,kode_gejala,' . $gejala->id,
            'nama_gejala' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
        ]);

        $gejala->update($request->all());

        $rolePrefix = Auth::user()->role;
        return redirect()->route($rolePrefix . '.gejala.index')->with('success', 'Data gejala berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        $rolePrefix = Auth::user()->role;
        return redirect()->route($rolePrefix . '.gejala.index')->with('success', 'Data gejala berhasil dihapus.');
    }
}
