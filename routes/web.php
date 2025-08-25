<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\DiagnosaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Grup untuk semua pengguna yang sudah otentikasi
Route::middleware(['auth', 'verified'])->group(function () {

    // Rute dashboard utama yang akan mengarahkan berdasarkan peran
    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->role === 'admin' || $user->role === 'dokter') {
            return redirect()->route('admin.dashboard'); // Redirect Admin & Dokter ke dashboard mereka
        }
        
        // Pengguna biasa tetap di dashboard umum
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk manajemen profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Diagnosa untuk Pengguna
    Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa.index');
    Route::post('/diagnosa', [DiagnosaController::class, 'process'])->name('diagnosa.process');
    Route::get('/diagnosa/hasil/{diagnosaHistory}', [DiagnosaController::class, 'hasil'])->name('diagnosa.hasil');
    Route::get('/diagnosa/riwayat', [DiagnosaController::class, 'riwayat'])->name('diagnosa.riwayat');

});

// Grup khusus untuk ADMIN dan DOKTER (Manajemen Data Master)
Route::middleware(['auth', 'verified', 'role:admin,dokter'])
    ->prefix('admin') // URL akan diawali dengan /admin/
    ->name('admin.') // Nama rute akan diawali dengan admin.
    ->group(function () {
        
    Route::get('/dashboard', function () {
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard');
        }
        return view('dokter.dashboard');
    })->name('dashboard');

    // Rute CRUDs
    Route::resource('gejala', GejalaController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::get('rule', [RuleController::class, 'index'])->name('rule.index');
    Route::get('rule/{penyakit}/edit', [RuleController::class, 'edit'])->name('rule.edit');
    Route::put('rule/{penyakit}', [RuleController::class, 'update'])->name('rule.update');
});

require __DIR__ . '/auth.php';
