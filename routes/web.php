<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controller Umum
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\BackwardDiagnosaController;

// ==========================================================
// ===== REVISI PADA PEMANGGILAN CONTROLLER DI SINI =====
// ==========================================================
// Controller yang diakses Admin & Dokter
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;

// Controller khusus Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DokterController;

// Controller khusus Dokter
use App\Http\Controllers\Dokter\DashboardController as DokterDashboardController;
use App\Http\Controllers\Dokter\RuleController;

// Controller khusus Pengguna
use App\Http\Controllers\User\DashboardController as UserDashboardController;
// ==========================================================


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Publik
Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Grup untuk semua pengguna yang sudah otentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user->role === 'admin') return redirect()->route('admin.dashboard');
        if ($user->role === 'dokter') return redirect()->route('dokter.dashboard');
        return (new UserDashboardController)->index();
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// RUTE KHUSUS UNTUK ADMIN
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboardController::class)->name('dashboard');
    Route::resource('gejala', GejalaController::class)->except(['show']);
    Route::resource('penyakit', PenyakitController::class)->except(['show']);
    Route::resource('dokter', DokterController::class)->except(['show']);
});


// RUTE KHUSUS UNTUK DOKTER
Route::middleware(['auth', 'verified', 'role:dokter'])->prefix('dokter')->name('dokter.')->group(function () {
    Route::get('/dashboard', [DokterDashboardController::class, 'index'])->name('dashboard');
    Route::resource('gejala', GejalaController::class)->except(['show']);
    Route::resource('penyakit', PenyakitController::class)->except(['show']);
    Route::get('rule', [RuleController::class, 'index'])->name('rule.index');
    Route::get('rule/{penyakit}/edit', [RuleController::class, 'edit'])->name('rule.edit');
    Route::put('rule/{penyakit}', [RuleController::class, 'update'])->name('rule.update');
});


// RUTE KHUSUS UNTUK PENGGUNA
Route::middleware(['auth', 'verified', 'role:pengguna'])->prefix('diagnosa')->name('diagnosa.')->group(function () {
    Route::get('/', [DiagnosaController::class, 'index'])->name('index');
    Route::post('/', [DiagnosaController::class, 'process'])->name('process');
    Route::get('/hasil/{diagnosaHistory}', [DiagnosaController::class, 'hasil'])->name('hasil');
    Route::get('/riwayat', [DiagnosaController::class, 'riwayat'])->name('riwayat');
});

Route::middleware(['auth', 'verified', 'role:pengguna'])
    ->prefix('diagnosa-mundur') // Menggunakan prefix 'diagnosa-mundur'
    ->name('diagnosa-backward.')
    ->group(function () {
        Route::get('/', [BackwardDiagnosaController::class, 'index'])->name('index');
        Route::post('/start', [BackwardDiagnosaController::class, 'start'])->name('start');
        Route::get('/proses', [BackwardDiagnosaController::class, 'process'])->name('process');
        Route::post('/jawab', [BackwardDiagnosaController::class, 'answer'])->name('answer');
        Route::get('/hasil', [BackwardDiagnosaController::class, 'result'])->name('result');
});

require __DIR__ . '/auth.php';