<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\DiagnosaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dokter\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Grup untuk semua pengguna yang sudah otentikasi
Route::middleware(['auth', 'verified'])->group(function () {

    // =========================================================================
    // ===== PEMBATAS: LOGIKA DASHBOARD DIPERBAIKI DI SINI =====
    // =========================================================================
    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->role === 'admin') {
            // Arahkan admin ke dashboard admin
            return redirect()->route('admin.dashboard');
        }

        if ($user->role === 'dokter') {
            // Arahkan dokter ke dashboard dokter
            return redirect()->route('dokter.dashboard');
        }

        // Pengguna biasa (user) tetap di dashboard umum
        return view('dashboard');
    })->name('dashboard');
    // =========================================================================

    // Rute untuk manajemen profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Diagnosa untuk Pengguna
    Route::middleware('role:user')->prefix('diagnosa')->name('diagnosa.')->group(function () {
        Route::get('/', [DiagnosaController::class, 'index'])->name('index');
        Route::post('/', [DiagnosaController::class, 'process'])->name('process');
        Route::get('/hasil/{diagnosaHistory}', [DiagnosaController::class, 'hasil'])->name('hasil');
        Route::get('/riwayat', [DiagnosaController::class, 'riwayat'])->name('riwayat');
    });
});


// ==========================================================
// ===== PATOKAN 3: RUTE KHUSUS UNTUK ADMIN =====
// ==========================================================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

    // RUTE DASHBOARD ADMIN YANG HILANG (SEKARANG DITAMBAHKAN)
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Pastikan Anda punya view ini
    })->name('dashboard');

    // Manajemen Gejala
    Route::resource('gejala', GejalaController::class)->except(['show']);

    // Manajemen Penyakit
    Route::resource('penyakit', PenyakitController::class)->except(['show']);

    // Manajemen Rule Base (Admin juga bisa akses)
    Route::get('rule', [RuleController::class, 'index'])->name('rule.index');
    Route::get('rule/{penyakit}/edit', [RuleController::class, 'edit'])->name('rule.edit');
    Route::put('rule/{penyakit}', [RuleController::class, 'update'])->name('rule.update');
});


// ==========================================================
// ===== PATOKAN 4: RUTE KHUSUS UNTUK DOKTER =====
// ==========================================================
Route::middleware(['auth', 'role:dokter'])->prefix('dokter')->name('dokter.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Manajemen Rule Base oleh Dokter
    Route::get('rule', [RuleController::class, 'index'])->name('rule.index');
    Route::get('rule/{penyakit}/edit', [RuleController::class, 'edit'])->name('rule.edit');
    Route::put('rule/{penyakit}', [RuleController::class, 'update'])->name('rule.update');
});


require __DIR__ . '/auth.php';