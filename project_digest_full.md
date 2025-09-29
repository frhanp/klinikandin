# Project Digest (Full Content)
_Generated: 2025-09-29 21:15:42_
**Root:** D:\Laragon\www\klinikandin


## Struktur Proyek (filtered, no depth limit)
```
.git
app
bootstrap
config
database
node_modules
public
resources
routes
storage
tests
vendor
.editorconfig
.env
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
digest.ps1
package-lock.json
package.json
phpunit.xml
postcss.config.js
project_digest_full.md
project_summary.md
README.md
tailwind.config.js
vite.config.js
app\Http
app\Models
app\Providers
app\View
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Controllers\Admin
app\Http\Controllers\Auth
app\Http\Controllers\Dokter
app\Http\Controllers\User
app\Http\Controllers\BackwardDiagnosaController.php
app\Http\Controllers\Controller.php
app\Http\Controllers\DiagnosaController.php
app\Http\Controllers\HomeController.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\Admin\DashboardController.php
app\Http\Controllers\Admin\DokterController.php
app\Http\Controllers\Admin\GejalaController.php
app\Http\Controllers\Admin\PenyakitController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Controllers\Dokter\DashboardController.php
app\Http\Controllers\Dokter\RuleController.php
app\Http\Controllers\User\DashboardController.php
app\Http\Middleware\RoleMiddleware.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Models\DiagnosaHistory.php
app\Models\Gejala.php
app\Models\Penyakit.php
app\Models\Rule.php
app\Models\User.php
app\Providers\AppServiceProvider.php
app\View\Components
app\View\Components\AppLayout.php
app\View\Components\GuestLayout.php
bootstrap\cache
bootstrap\app.php
bootstrap\providers.php
bootstrap\cache\.gitignore
bootstrap\cache\packages.php
bootstrap\cache\services.php
config\app.php
config\auth.php
config\cache.php
config\database.php
config\filesystems.php
config\logging.php
config\mail.php
config\queue.php
config\services.php
config\session.php
database\factories
database\migrations
database\seeders
database\.gitignore
database\factories\UserFactory.php
database\migrations\0001_01_01_000000_create_users_table.php
database\migrations\0001_01_01_000001_create_cache_table.php
database\migrations\0001_01_01_000002_create_jobs_table.php
database\migrations\2025_06_28_135127_add_role_to_users_table.php
database\migrations\2025_06_28_140421_create_gejalas_table.php
database\migrations\2025_06_28_140422_create_penyakits_table.php
database\migrations\2025_06_28_140424_create_rules_table.php
database\migrations\2025_06_28_150106_create_diagnosa_histories_table.php
database\migrations\2025_09_01_151444_update_penyakits_table_for_solutions.php
database\migrations\2025_09_29_125812_add_kategori_to_gejalas_table.php
database\seeders\DatabaseSeeder.php
database\seeders\GejalaSeeder.php
database\seeders\PenyakitSeeder.php
database\seeders\RuleSeeder.php
database\seeders\UserRoleSeeder.php
public\build
public\images
public\storage
public\.htaccess
public\favicon.ico
public\hot
public\index.php
public\robots.txt
public\images\doctors
public\images\tulang.jpg
public\images\doctors\drirawan.png
public\images\doctors\drirma.png
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\admin
resources\views\auth
resources\views\components
resources\views\diagnosa
resources\views\diagnosa-backward
resources\views\dokter
resources\views\layouts
resources\views\pages
resources\views\profile
resources\views\dashboard.blade.php
resources\views\welcome.blade.php
resources\views\admin\dokter
resources\views\admin\gejala
resources\views\admin\penyakit
resources\views\admin\rule
resources\views\admin\dashboard.blade.php
resources\views\admin\dokter\create.blade.php
resources\views\admin\dokter\edit.blade.php
resources\views\admin\dokter\index.blade.php
resources\views\admin\gejala\create.blade.php
resources\views\admin\gejala\edit.blade.php
resources\views\admin\gejala\index.blade.php
resources\views\admin\penyakit\create.blade.php
resources\views\admin\penyakit\edit.blade.php
resources\views\admin\penyakit\index.blade.php
resources\views\admin\rule\edit.blade.php
resources\views\admin\rule\index.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\diagnosa\hasil.blade.php
resources\views\diagnosa\index.blade.php
resources\views\diagnosa\riwayat.blade.php
resources\views\diagnosa\select.blade.php
resources\views\diagnosa-backward\hasil.blade.php
resources\views\diagnosa-backward\index.blade.php
resources\views\diagnosa-backward\process.blade.php
resources\views\dokter\dashboard.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\pages\kontak.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
routes\auth.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\private
storage\app\public
storage\app\.gitignore
storage\app\private\.gitignore
storage\app\public\.gitignore
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\.gitignore
storage\framework\cache\data\.gitignore
storage\framework\sessions\.gitignore
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\08170422efbc6844d902adfdec948f66.php
storage\framework\views\0aa168f9c90ec03b52a561fc26e67def.php
storage\framework\views\0acd9b82810f9c67b7babdb310a11f8e.php
storage\framework\views\0c42d7137be0603e1fc772b02f194211.php
storage\framework\views\0c9d480842e68a02e7709367b1f6b419.php
storage\framework\views\0f70ab1c1e2860cc792400f02b11d64a.php
storage\framework\views\116d3355146c33cb96b488755ac221b6.php
storage\framework\views\1974d6367955cbd55865d36616b93190.php
storage\framework\views\1ee04b18da7db2b44c6d725a0bccf0b5.php
storage\framework\views\1ef080e247a5f0128a5dcb829b3a69cd.php
storage\framework\views\20f9ba587421e39d9bff8dfdf72aa95a.php
storage\framework\views\21ac4f56645ec98621528cd84e3e3117.php
storage\framework\views\234091eec802b05d3c9271e6757ca204.php
storage\framework\views\23590115baaed7661a307d71b64108ea.php
storage\framework\views\28226cfc94d335236eb915b3b45c694b.php
storage\framework\views\2d4a4355b951aad944a8ed8e3b7495a5.php
storage\framework\views\373219ad9efd004ec54e89c4cdae4595.php
storage\framework\views\3cd869995db23d4bcc33dec64e4a30e1.php
storage\framework\views\3de08c8177a023e29de57ac54c1818ba.php
storage\framework\views\43457cdb8128a702d4aa47f57898e837.php
storage\framework\views\453440fe17d613a0fd184f2a2396f3ab.php
storage\framework\views\48385614d2999c9398f7191abaa4f912.php
storage\framework\views\4c7cd5280930a55473db41967d23159a.php
storage\framework\views\4faff72139c4909302ae5b99f62eccbf.php
storage\framework\views\542b03662a77ff5aff8887b0808da031.php
storage\framework\views\54f17061d70650b7d2b9cb5ae6628143.php
storage\framework\views\552c7af6611f3963bf6ea23b12a89d64.php
storage\framework\views\5fa187679e71ac95f6d7a5aeaf410718.php
storage\framework\views\6427d900e2be87da62f0f8107aedd515.php
storage\framework\views\69ecc658ea70cfa4b62f3788985c5933.php
storage\framework\views\6a0ba22252fc0fdb2990553e6e7b5d79.php
storage\framework\views\6c6826cfa5c18281152fbe56cd6ff88e.php
storage\framework\views\899084c187ed77f2461d6930d359fcd4.php
storage\framework\views\8b6402ff1849aef6ae5a62b52a22734b.php
storage\framework\views\90fe2da24e2118204aed9e5b8ade7dff.php
storage\framework\views\9ca6c9b36058199e336d730d27a87fce.php
storage\framework\views\b56843ce51385fdf12b8e632a98049f0.php
storage\framework\views\b66d67d0023f0b8e7dd722a80dd1802d.php
storage\framework\views\bdea1b8ed75254a5bd408d48a89d67ab.php
storage\framework\views\c0f17148c7775688ed5f6038dd93a5f3.php
storage\framework\views\d397bc38c568178fa52a32e07acf01a1.php
storage\framework\views\d40421f68651eed2b7a462e5dce29eb4.php
storage\framework\views\d84e506498108dd17f52d530e14e64b4.php
storage\framework\views\d995df5a49c8feaa16187ab160da273f.php
storage\framework\views\d9c3926c414ed81111ab4f58355489e7.php
storage\framework\views\dd901bab0ef8695061e31a100eb18925.php
storage\framework\views\e49f5d53a862118551a69715229ccef1.php
storage\framework\views\e615734ff224bd6746f813186ff82847.php
storage\framework\views\e7c6c7338ee93927d43275d7ee0c205d.php
storage\framework\views\eab2bde707ddda25261fc26f4d67e94b.php
storage\framework\views\eaf1d1951717d4e087315bf14074a6b2.php
storage\framework\views\ec049cf57236412217a259578ad53bdc.php
storage\framework\views\f1226efc7c251018e20c86e57c18556b.php
storage\framework\views\f17bbd03d6eea5ed29cdea754e495e92.php
storage\framework\views\f98d59d2e50ba6f42a3a10ea756d6312.php
tests\Feature
tests\Unit
tests\TestCase.php
tests\Feature\Auth
tests\Feature\ExampleTest.php
tests\Feature\ProfileTest.php
tests\Feature\Auth\AuthenticationTest.php
tests\Feature\Auth\EmailVerificationTest.php
tests\Feature\Auth\PasswordConfirmationTest.php
tests\Feature\Auth\PasswordResetTest.php
tests\Feature\Auth\PasswordUpdateTest.php
tests\Feature\Auth\RegistrationTest.php
tests\Unit\ExampleTest.php
```


## Info Git
```
Remote:
origin	https://github.com/frhanp/klinikandin.git (fetch)
origin	https://github.com/frhanp/klinikandin.git (push)

Branch:
main

Last 5 commits:
34f8324 backward chaining
7c968ee edit kontak
c89696d ubah hak akses kedua kalinya
0d5a617 add dokter dan revisian lainnya
26cb2dc susun hak akses dan dashboard dokter
```


## Dependencies (summary)
```
composer.json (require):
  (parse error / none)
composer.json (require-dev):
  (parse error / none)

package.json (dependencies):
  (parse error / none)
package.json (devDependencies):
  (parse error / none)
```


## Routes Files Content
```
===== routes\auth.php =====
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

===== routes\console.php =====
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

===== routes\web.php =====
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

    Route::post('/pilih-gejala', [DiagnosaController::class, 'selectSymptoms'])->name('pilih-gejala');
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

```


## Routes (from command)
```

  GET|HEAD        / ........................................................................................................ home
  GET|HEAD        _debugbar/assets/javascript ....................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets .................... debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} .............. debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} ............. debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open ........................ debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain ............ debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  GET|HEAD        admin/dashboard ................................................... admin.dashboard ΓÇ║ Admin\DashboardController
  GET|HEAD        admin/dokter ................................................ admin.dokter.index ΓÇ║ Admin\DokterController@index
  POST            admin/dokter ................................................ admin.dokter.store ΓÇ║ Admin\DokterController@store
  GET|HEAD        admin/dokter/create ....................................... admin.dokter.create ΓÇ║ Admin\DokterController@create
  PUT|PATCH       admin/dokter/{dokter} ..................................... admin.dokter.update ΓÇ║ Admin\DokterController@update
  DELETE          admin/dokter/{dokter} ................................... admin.dokter.destroy ΓÇ║ Admin\DokterController@destroy
  GET|HEAD        admin/dokter/{dokter}/edit .................................... admin.dokter.edit ΓÇ║ Admin\DokterController@edit
  GET|HEAD        admin/gejala ................................................ admin.gejala.index ΓÇ║ Admin\GejalaController@index
  POST            admin/gejala ................................................ admin.gejala.store ΓÇ║ Admin\GejalaController@store
  GET|HEAD        admin/gejala/create ....................................... admin.gejala.create ΓÇ║ Admin\GejalaController@create
  PUT|PATCH       admin/gejala/{gejala} ..................................... admin.gejala.update ΓÇ║ Admin\GejalaController@update
  DELETE          admin/gejala/{gejala} ................................... admin.gejala.destroy ΓÇ║ Admin\GejalaController@destroy
  GET|HEAD        admin/gejala/{gejala}/edit .................................... admin.gejala.edit ΓÇ║ Admin\GejalaController@edit
  GET|HEAD        admin/penyakit .......................................... admin.penyakit.index ΓÇ║ Admin\PenyakitController@index
  POST            admin/penyakit .......................................... admin.penyakit.store ΓÇ║ Admin\PenyakitController@store
  GET|HEAD        admin/penyakit/create ................................. admin.penyakit.create ΓÇ║ Admin\PenyakitController@create
  PUT|PATCH       admin/penyakit/{penyakit} ............................. admin.penyakit.update ΓÇ║ Admin\PenyakitController@update
  DELETE          admin/penyakit/{penyakit} ........................... admin.penyakit.destroy ΓÇ║ Admin\PenyakitController@destroy
  GET|HEAD        admin/penyakit/{penyakit}/edit ............................ admin.penyakit.edit ΓÇ║ Admin\PenyakitController@edit
  GET|HEAD        confirm-password ................................... password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password ..................................................... Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard ........................................................................................... dashboard
  GET|HEAD        diagnosa ............................................................ diagnosa.index ΓÇ║ DiagnosaController@index
  POST            diagnosa ........................................................ diagnosa.process ΓÇ║ DiagnosaController@process
  GET|HEAD        diagnosa-mundur .................................... diagnosa-backward.index ΓÇ║ BackwardDiagnosaController@index
  GET|HEAD        diagnosa-mundur/hasil ............................ diagnosa-backward.result ΓÇ║ BackwardDiagnosaController@result
  POST            diagnosa-mundur/jawab ............................ diagnosa-backward.answer ΓÇ║ BackwardDiagnosaController@answer
  GET|HEAD        diagnosa-mundur/proses ......................... diagnosa-backward.process ΓÇ║ BackwardDiagnosaController@process
  POST            diagnosa-mundur/start .............................. diagnosa-backward.start ΓÇ║ BackwardDiagnosaController@start
  GET|HEAD        diagnosa/hasil/{diagnosaHistory} .................................... diagnosa.hasil ΓÇ║ DiagnosaController@hasil
  POST            diagnosa/pilih-gejala ............................... diagnosa.pilih-gejala ΓÇ║ DiagnosaController@selectSymptoms
  GET|HEAD        diagnosa/riwayat ................................................ diagnosa.riwayat ΓÇ║ DiagnosaController@riwayat
  GET|HEAD        dokter/dashboard .......................................... dokter.dashboard ΓÇ║ Dokter\DashboardController@index
  GET|HEAD        dokter/gejala .............................................. dokter.gejala.index ΓÇ║ Admin\GejalaController@index
  POST            dokter/gejala .............................................. dokter.gejala.store ΓÇ║ Admin\GejalaController@store
  GET|HEAD        dokter/gejala/create ..................................... dokter.gejala.create ΓÇ║ Admin\GejalaController@create
  PUT|PATCH       dokter/gejala/{gejala} ................................... dokter.gejala.update ΓÇ║ Admin\GejalaController@update
  DELETE          dokter/gejala/{gejala} ................................. dokter.gejala.destroy ΓÇ║ Admin\GejalaController@destroy
  GET|HEAD        dokter/gejala/{gejala}/edit .................................. dokter.gejala.edit ΓÇ║ Admin\GejalaController@edit
  GET|HEAD        dokter/penyakit ........................................ dokter.penyakit.index ΓÇ║ Admin\PenyakitController@index
  POST            dokter/penyakit ........................................ dokter.penyakit.store ΓÇ║ Admin\PenyakitController@store
  GET|HEAD        dokter/penyakit/create ............................... dokter.penyakit.create ΓÇ║ Admin\PenyakitController@create
  PUT|PATCH       dokter/penyakit/{penyakit} ........................... dokter.penyakit.update ΓÇ║ Admin\PenyakitController@update
  DELETE          dokter/penyakit/{penyakit} ......................... dokter.penyakit.destroy ΓÇ║ Admin\PenyakitController@destroy
  GET|HEAD        dokter/penyakit/{penyakit}/edit .......................... dokter.penyakit.edit ΓÇ║ Admin\PenyakitController@edit
  GET|HEAD        dokter/rule ................................................... dokter.rule.index ΓÇ║ Dokter\RuleController@index
  PUT             dokter/rule/{penyakit} ...................................... dokter.rule.update ΓÇ║ Dokter\RuleController@update
  GET|HEAD        dokter/rule/{penyakit}/edit ..................................... dokter.rule.edit ΓÇ║ Dokter\RuleController@edit
  POST            email/verification-notification ........ verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password .................................... password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password ....................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        kontak ......................................................................... kontak ΓÇ║ HomeController@kontak
  GET|HEAD        login ...................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login ............................................................... Auth\AuthenticatedSessionController@store
  POST            logout ................................................... logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  PUT             password ..................................................... password.update ΓÇ║ Auth\PasswordController@update
  GET|HEAD        profile ................................................................. profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile ............................................................. profile.update ΓÇ║ ProfileController@update
  DELETE          profile ........................................................... profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register ...................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST            register .................................................................. Auth\RegisteredUserController@store
  POST            reset-password .............................................. password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} ..................................... password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        storage/{path} .................................................................................. storage.local
  GET|HEAD        up ............................................................................................................ 
  GET|HEAD        verify-email ..................................... verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} ..................................... verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                              Showing [74] routes

```


## Controllers Content
```
===== app\Http\Controllers\Admin\DashboardController.php =====
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

===== app\Http\Controllers\Admin\DokterController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DokterController extends Controller
{
    /**
     * Menampilkan daftar semua dokter.
     */
    public function index()
    {
        $dokters = User::where('role', 'dokter')->latest()->paginate(10);
        return view('admin.dokter.index', compact('dokters'));
    }

    /**
     * Menampilkan form untuk membuat dokter baru.
     */
    public function create()
    {
        return view('admin.dokter.create');
    }

    /**
     * Menyimpan dokter baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'dokter',
        ]);

        return redirect()->route('admin.dokter.index')->with('success', 'Data dokter berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data dokter.
     */
    public function edit(User $dokter)
    {
        return view('admin.dokter.edit', compact('dokter'));
    }

    /**
     * Memperbarui data dokter di database.
     */
    public function update(Request $request, User $dokter)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class.',email,'.$dokter->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        $dokter->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Update password jika diisi
        if ($request->filled('password')) {
            $dokter->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('admin.dokter.index')->with('success', 'Data dokter berhasil diperbarui.');
    }

    /**
     * Menghapus data dokter dari database.
     */
    public function destroy(User $dokter)
    {
        $dokter->delete();
        return redirect()->route('admin.dokter.index')->with('success', 'Data dokter berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\GejalaController.php =====
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

===== app\Http\Controllers\Admin\PenyakitController.php =====
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

===== app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

===== app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

===== app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
    }
}

===== app\Http\Controllers\Auth\NewPasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\PasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}

===== app\Http\Controllers\Auth\PasswordResetLinkController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\RegisteredUserController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\VerifyEmailController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}

===== app\Http\Controllers\Dokter\DashboardController.php =====
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

===== app\Http\Controllers\Dokter\RuleController.php =====
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

===== app\Http\Controllers\User\DashboardController.php =====
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

===== app\Http\Controllers\BackwardDiagnosaController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Support\Facades\Auth;
use App\Models\DiagnosaHistory;

class BackwardDiagnosaController extends Controller
{
     /**
     * Menampilkan halaman awal untuk memilih penyakit (hipotesis).
     */
    public function index()
    {
        $penyakits = Penyakit::orderBy('nama_penyakit')->get();
        return view('diagnosa-backward.index', compact('penyakits'));
    }

    /**
     * Memulai proses backward chaining.
     * Menerima penyakit yang dipilih dan menyiapkan sesi diagnosa.
     */
    public function start(Request $request)
    {
        $request->validate(['penyakit_id' => 'required|exists:penyakits,id']);

        $penyakit = Penyakit::with('gejalas')->findOrFail($request->penyakit_id);
        $gejalaIds = $penyakit->gejalas->pluck('id')->toArray();

        // Jika penyakit tidak memiliki gejala sama sekali
        if (empty($gejalaIds)) {
            return redirect()->route('diagnosa-backward.index')->with('error', 'Penyakit yang dipilih tidak memiliki gejala terkait di dalam basis aturan.');
        }
        
        // Simpan state diagnosa di session
        session([
            'backward_diagnosa' => [
                'penyakit_id' => $penyakit->id,
                'gejala_ids' => $gejalaIds,
                'current_gejala_index' => 0,
                'jawaban_gejala' => [], // Untuk menyimpan jawaban 'ya'
            ]
        ]);

        return redirect()->route('diagnosa-backward.process');
    }

    /**
     * Menampilkan pertanyaan gejala satu per satu.
     */
    public function process()
    {
        $diagnosaData = session('backward_diagnosa');

        // Jika sesi tidak ada, kembalikan ke awal
        if (!$diagnosaData) {
            return redirect()->route('diagnosa-backward.index');
        }

        $gejalaIndex = $diagnosaData['current_gejala_index'];
        $gejalaIds = $diagnosaData['gejala_ids'];

        // Jika semua gejala sudah ditanyakan, hitung hasilnya
        if ($gejalaIndex >= count($gejalaIds)) {
            return redirect()->route('diagnosa-backward.result');
        }

        // Ambil gejala saat ini untuk ditanyakan
        $currentGejalaId = $gejalaIds[$gejalaIndex];
        $gejala = \App\Models\Gejala::find($currentGejalaId);
        $penyakit = Penyakit::find($diagnosaData['penyakit_id']);
        $progress = round((($gejalaIndex + 1) / count($gejalaIds)) * 100);

        return view('diagnosa-backward.process', compact('gejala', 'penyakit', 'progress'));
    }

    /**
     * Menyimpan jawaban dari pengguna dan lanjut ke gejala berikutnya.
     */
    public function answer(Request $request)
    {
        $request->validate(['jawaban' => 'required|in:ya,tidak']);

        $diagnosaData = session('backward_diagnosa');
        if (!$diagnosaData) {
            return redirect()->route('diagnosa-backward.index');
        }

        // Simpan jawaban jika 'ya'
        if ($request->jawaban == 'ya') {
            $currentGejalaId = $diagnosaData['gejala_ids'][$diagnosaData['current_gejala_index']];
            $diagnosaData['jawaban_gejala'][] = $currentGejalaId;
        }

        // Lanjut ke gejala berikutnya
        $diagnosaData['current_gejala_index']++;
        session(['backward_diagnosa' => $diagnosaData]);

        return redirect()->route('diagnosa-backward.process');
    }

    /**
     * Menampilkan hasil akhir dari proses backward chaining.
     */
    /**
     * Menampilkan hasil akhir dari proses backward chaining.
     */
    public function result()
    {
        $diagnosaData = session('backward_diagnosa');
        if (!$diagnosaData) {
            return redirect()->route('diagnosa-backward.index');
        }

        $penyakit = Penyakit::findOrFail($diagnosaData['penyakit_id']);
        $totalGejalaPenyakit = count($diagnosaData['gejala_ids']);
        $gejalaCocokIds = $diagnosaData['jawaban_gejala'];
        $gejalaCocokCount = count($gejalaCocokIds);
        
        // Ambil data model Gejala berdasarkan ID yang dijawab "ya"
        $gejalaTerpilih = \App\Models\Gejala::whereIn('id', $gejalaCocokIds)->get();

        $skor = ($totalGejalaPenyakit > 0) ? ($gejalaCocokCount / $totalGejalaPenyakit) * 100 : 0;
        $terbukti = $skor > 60;

        if ($terbukti) {
            DiagnosaHistory::create([
                'user_id' => Auth::id(),
                'penyakit_id' => $penyakit->id,
                'gejala_terpilih' => json_encode($gejalaCocokIds),
                'hasil_skor' => $skor,
            ]);
        }

        session()->forget('backward_diagnosa');

        // Kirim semua data yang diperlukan ke view
        return view('diagnosa-backward.hasil', compact('penyakit', 'terbukti', 'skor', 'gejalaTerpilih'));
    }
}

===== app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

===== app\Http\Controllers\DiagnosaController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DiagnosaHistory;
use Illuminate\Support\Facades\Auth;

class DiagnosaController extends Controller
{
    public function index()
    {
        // Ambil semua kategori unik dari database
        $kategoris = Gejala::select('kategori')->distinct()->pluck('kategori');
        return view('diagnosa.index', compact('kategoris'));
    }

    // LANGKAH 2: TAMPILKAN GEJALA BERDASARKAN KATEGORI YANG DIPILIH
    public function selectSymptoms(Request $request)
    {
        $request->validate(['kategori' => 'required|string']);
        $kategori = $request->kategori;
        $gejalas = Gejala::where('kategori', $kategori)->get();

        return view('diagnosa.select', compact('gejalas', 'kategori'));
    }

    // LANGKAH 3: PROSES DIAGNOSA (Logika inti tetap sama)
    public function process(Request $request)
    {
        $request->validate([
            'gejala_ids' => 'required|array|min:1',
        ], [
            'gejala_ids.required' => 'Silakan pilih minimal satu gejala untuk memulai diagnosa.',
        ]);

        $gejala_ids = $request->input('gejala_ids', []);
        
        if (count($gejala_ids) > 10) {
            return redirect()->back()->with('error', 'Anda memilih terlalu banyak gejala. Mohon pilih hanya gejala yang paling relevan (maksimal 10).');
        }

        $penyakits = Penyakit::with('gejalas')->get();
        $matches = [];

        foreach ($penyakits as $penyakit) {
            $gejalaCocokCount = $penyakit->gejalas->whereIn('id', $gejala_ids)->count();
            $totalGejala = $penyakit->gejalas->count();

            if ($totalGejala > 0) {
                $skor = $gejalaCocokCount / ($totalGejala + count($gejala_ids) - $gejalaCocokCount);
                if ($skor > 0) {
                    $matches[] = [
                        'penyakit' => $penyakit,
                        'skor' => $skor,
                    ];
                }
            }
        }

        if (empty($matches)) {
            return redirect()->route('diagnosa.index')->with('error', 'Tidak ditemukan penyakit yang sesuai dengan gejala yang Anda pilih.');
        }

        usort($matches, fn($a, $b) => $b['skor'] <=> $a['skor']);
        $bestMatch = $matches[0];

        $diagnosaHistory = DiagnosaHistory::create([
            'user_id' => auth()->id(),
            'penyakit_id' => $bestMatch['penyakit']->id,
            'gejala_terpilih' => json_encode($gejala_ids),
            'hasil_skor' => $bestMatch['skor'] * 100,
        ]);

        return redirect()->route('diagnosa.hasil', $diagnosaHistory->id);
    }

    public function hasil(DiagnosaHistory $diagnosaHistory)
    {
        if ($diagnosaHistory->user_id !== Auth::id()) {
            abort(403);
        }

        $diagnosaHistory->load('penyakit');

        $gejalaTerpilihIds = json_decode($diagnosaHistory->gejala_terpilih, true);
        $gejalaTerpilih = Gejala::whereIn('id', $gejalaTerpilihIds)->get();

        return view('diagnosa.hasil', compact('diagnosaHistory', 'gejalaTerpilih'));
    }

    public function riwayat()
    {
        $riwayat = DiagnosaHistory::where('user_id', Auth::id())
            ->with('penyakit')
            ->latest()
            ->paginate(10);
        return view('diagnosa.riwayat', compact('riwayat'));
    }
}

===== app\Http\Controllers\HomeController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman kontak dokter.
     */
    public function kontak()
    {
        $kontakDokter = [
            [
                'nama_dokter' => 'Dr. Irma Suryani Darise, Sp.OT. Subsp. OTB(K)',
                'tempat_praktek' => 'Apotek INSYIRAH',
                'map_url' => 'https://maps.app.goo.gl/Lw3G6GnJX6e6r6XF7?g_st=aw',
                'foto' => asset('images/doctors/drirma.png') 
            ],
            [
                'nama_dokter' => 'Dr. Chairul Wahjudi, M.Kes, Sp.OT(K) Hip&Knee',
                'tempat_praktek' => 'Klinik Pratama Mulia',
                'map_url' => 'https://maps.app.goo.gl/i34n2JoStnra6e7GA?g_st=aw',
                'foto' => "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'%3E%3Cpath fill-rule='evenodd' d='M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z' clip-rule='evenodd' /%3E%3C/svg%3E"
            ],
            [
                'nama_dokter' => 'Dr. Irawan Huntoyungo, M.Kes, Sp.OT',
                'tempat_praktek' => 'APOTEK ORTHOMEDIKA',
                'map_url' => 'https://maps.app.goo.gl/Gq9mAp8HyzwpVrJG8?g_st=aw',
                'foto' => asset('images/doctors/drirawan.png')
            ],
        ];

        return view('pages.kontak', compact('kontakDokter'));
    }
}

===== app\Http\Controllers\ProfileController.php =====
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

```


## Models Content
```
===== app\Models\DiagnosaHistory.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiagnosaHistory extends Model
{
    protected $fillable = ['user_id', 'penyakit_id', 'gejala_terpilih', 'hasil_skor'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function penyakit()
    // {
    //     return $this->belongsTo(Penyakit::class);
    // }

     /**
     * Get the user that owns the diagnosa history.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the penyakit associated with the diagnosa history.
     */
    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(Penyakit::class);
    }
    
    
}

===== app\Models\Gejala.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gejala extends Model
{
    protected $fillable = ['kode_gejala', 'nama_gejala', 'kategori'];

    // public function rules()
    // {
    //     return $this->hasMany(Rule::class);
    // }

    /**
     * Relasi many-to-many dengan model Penyakit.
     */
    public function penyakits(): BelongsToMany
    {
        return $this->belongsToMany(Penyakit::class, 'rules', 'gejala_id', 'penyakit_id');
    }


}

===== app\Models\Penyakit.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Penyakit extends Model
{
    protected $fillable = ['kode_penyakit', 'nama_penyakit', 'deskripsi', 'pencegahan', 'pengobatan'];

    // public function rules()
    // {
    //     return $this->hasMany(Rule::class);
    // }

      /**
     * Relasi many-to-many dengan model Gejala.
     * Pivot table kita adalah 'rules'.
     */
    public function gejalas(): BelongsToMany
    {
        return $this->belongsToMany(Gejala::class, 'rules', 'penyakit_id', 'gejala_id');
    }
}

===== app\Models\Rule.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    //
}

```


## Views & UI Files Content
```
===== resources\views\admin\dokter\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Dokter Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.dokter.store') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Nama Lengkap')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Alamat Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.dokter.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <x-primary-button>
                                {{ __('Simpan Dokter') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\dokter\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.dokter.update', $dokter->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <x-input-label for="name" :value="__('Nama Lengkap')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $dokter->name)" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Alamat Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $dokter->email)" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password Baru (Opsional)')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                            <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah password.</p>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.dokter.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <x-primary-button>
                                {{ __('Perbarui Dokter') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\dokter\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Data Dokter') }}
            </h2>
            <a href="{{ route('admin.dokter.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                Tambah Dokter Baru
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($dokters as $dokter)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dokter->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dokter->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.dokter.edit', $dokter->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form action="{{ route('admin.dokter.destroy', $dokter->id) }}" method="POST" class="inline-block ml-4" onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokter ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada data dokter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $dokters->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\gejala\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Gejala Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <form action="{{ route($rolePrefix . '.gejala.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="kode_gejala" class="block font-medium text-sm text-gray-700">Kode Gejala</label>
                            <input type="text" name="kode_gejala" id="kode_gejala" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('kode_gejala') }}" required>
                            @error('kode_gejala')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_gejala" class="block font-medium text-sm text-gray-700">Nama Gejala</label>
                            <input type="text" name="nama_gejala" id="nama_gejala" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('nama_gejala') }}" required>
                             @error('nama_gejala')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="kategori" class="block font-medium text-sm text-gray-700">Kategori Gejala</label>
                            <input type="text" name="kategori" id="kategori" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 ..." value="{{ old('kategori') }}" required>
                            <p class="text-xs text-gray-500 mt-1">Contoh: Tulang Belakang, Sendi, Lutut, Gejala Umum.</p>
                            @error('kategori')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route($rolePrefix . '.gejala.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\gejala\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Gejala') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <form action="{{ route($rolePrefix . '.gejala.update', $gejala) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="kode_gejala" class="block font-medium text-sm text-gray-700">Kode Gejala</label>
                            <input type="text" name="kode_gejala" id="kode_gejala"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ old('kode_gejala', $gejala->kode_gejala) }}" required>
                            @error('kode_gejala')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_gejala" class="block font-medium text-sm text-gray-700">Nama Gejala</label>
                            <input type="text" name="nama_gejala" id="nama_gejala"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ old('nama_gejala', $gejala->nama_gejala) }}" required>
                            @error('nama_gejala')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="kategori" class="block font-medium text-sm text-gray-700">Kategori Gejala</label>
                            <input type="text" name="kategori" id="kategori" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 ..." value="{{ old('kategori', $gejala->kategori) }}" required>
                            <p class="text-xs text-gray-500 mt-1">Contoh: Tulang Belakang, Sendi, Lutut, Gejala Umum.</p>
                            @error('kategori')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route($rolePrefix . '.gejala.index') }}"
                                class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\gejala\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Gejala') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- ========================================================== --}}
                    {{-- ===== REVISI DIMULAI DI SINI ===== --}}
                    {{-- ========================================================== --}}
                    @php
                        // Menentukan prefix route ('admin' atau 'dokter') berdasarkan peran pengguna
                        $rolePrefix = Auth::user()->role;
                    @endphp

                    {{-- Tombol Tambah Gejala (Link sudah dinamis) --}}
                    <div class="mb-4">
                        <a href="{{ route($rolePrefix . '.gejala.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Tambah Gejala
                        </a>
                    </div>

                    {{-- Notifikasi Sukses --}}
                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Tabel Data Gejala --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Gejala</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($gejalas as $index => $gejala)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gejalas->firstItem() + $index }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gejala->kode_gejala }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gejala->nama_gejala }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Link Edit & Form Hapus (sudah dinamis) --}}
                                            <a href="{{ route($rolePrefix . '.gejala.edit', $gejala) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                            <form action="{{ route($rolePrefix . '.gejala.destroy', $gejala) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                            Data belum tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                     {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $gejalas->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\penyakit\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Tambah Penyakit Baru') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <form action="{{ route($rolePrefix . '.penyakit.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="kode_penyakit" class="block font-medium text-sm text-gray-700">Kode Penyakit</label>
                            <input type="text" name="kode_penyakit" id="kode_penyakit" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" value="{{ old('kode_penyakit') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_penyakit" class="block font-medium text-sm text-gray-700">Nama Penyakit</label>
                            <input type="text" name="nama_penyakit" id="nama_penyakit" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" value="{{ old('nama_penyakit') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="block font-medium text-sm text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('deskripsi') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="pencegahan" class="block font-medium text-sm text-gray-700">Saran Pencegahan</label>
                            <textarea name="pencegahan" id="pencegahan" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('pencegahan') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="pengobatan" class="block font-medium text-sm text-gray-700">Saran Pengobatan</label>
                            <textarea name="pengobatan" id="pengobatan" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('pengobatan') }}</textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route($rolePrefix . '.penyakit.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\penyakit\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Penyakit') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <form action="{{ route($rolePrefix . '.penyakit.update', $penyakit) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="kode_penyakit" class="block font-medium text-sm text-gray-700">Kode Penyakit</label>
                            <input type="text" name="kode_penyakit" id="kode_penyakit" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" value="{{ old('kode_penyakit', $penyakit->kode_penyakit) }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_penyakit" class="block font-medium text-sm text-gray-700">Nama Penyakit</label>
                            <input type="text" name="nama_penyakit" id="nama_penyakit" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" value="{{ old('nama_penyakit', $penyakit->nama_penyakit) }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="block font-medium text-sm text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('deskripsi', $penyakit->deskripsi) }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="pencegahan" class="block font-medium text-sm text-gray-700">Saran Pencegahan</label>
                            <textarea name="pencegahan" id="pencegahan" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('pencegahan', $penyakit->pencegahan) }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="pengobatan" class="block font-medium text-sm text-gray-700">Saran Pengobatan</label>
                            <textarea name="pengobatan" id="pengobatan" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('pengobatan', $penyakit->pengobatan) }}</textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route($rolePrefix . '.penyakit.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\penyakit\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Penyakit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <div class="mb-4">
                        <a href="{{ route($rolePrefix . '.penyakit.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Tambah Penyakit
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Penyakit</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($penyakits as $index => $penyakit)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $penyakits->firstItem() + $index }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $penyakit->kode_penyakit }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $penyakit->nama_penyakit }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route($rolePrefix . '.penyakit.edit', $penyakit) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                            <form action="{{ route($rolePrefix . '.penyakit.destroy', $penyakit) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="4" class="px-6 py-4 text-center text-gray-500">Data belum tersedia.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $penyakits->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\rule\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Kelola Basis Aturan') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Pilih gejala yang relevan untuk penyakit: <strong class="font-medium text-gray-900">{{ $penyakit->nama_penyakit }}</strong>
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @php
                // Tentukan route action form berdasarkan role
                $updateRoute = Auth::user()->role == 'admin' 
                    ? route('admin.rule.update', $penyakit->id) 
                    : route('dokter.rule.update', $penyakit->id);
                
                $backRoute = Auth::user()->role == 'admin' 
                    ? route('admin.rule.index') 
                    : route('dokter.rule.index');
            @endphp

            <form action="{{ $updateRoute }}" method="POST">
                @csrf
                @method('PUT')

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8">
                        {{-- Layout Grid untuk Gejala --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($gejalas as $gejala)
                                <div>
                                    {{-- Setiap gejala dibungkus dalam label yang berfungsi sebagai kartu --}}
                                    <label for="gejala-{{ $gejala->id }}" 
                                        class="has-[:checked]:bg-indigo-50 has-[:checked]:ring-indigo-400 has-[:checked]:text-indigo-900
                                               flex items-center p-4 rounded-lg ring-1 ring-gray-200 
                                               cursor-pointer transition-all duration-150 hover:bg-gray-50">
                                        
                                        <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}"
                                            id="gejala-{{ $gejala->id }}" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            {{ in_array($gejala->id, $penyakitGejalaIds) ? 'checked' : '' }}>
                                        
                                        <span class="ml-3 font-medium text-sm text-gray-700">
                                            {{ $gejala->nama_gejala }}
                                        </span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Footer Aksi (Simpan & Kembali) --}}
                    <div class="flex items-center justify-end gap-x-6 bg-gray-50 px-6 py-4 border-t border-gray-200">
                        <a href="{{ $backRoute }}" class="text-sm font-semibold leading-6 text-gray-900">Kembali</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Simpan Aturan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\rule\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Basis Aturan (Rule Base)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4 text-gray-600">
                        Pilih penyakit untuk mengelola gejala yang berelasi.
                    </div>

                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kode</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Penyakit</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($penyakits as $penyakit)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $penyakit->kode_penyakit }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $penyakit->nama_penyakit }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Kode yang sudah diperbaiki --}}
                                            @php
                                                // Cek role user, lalu tentukan nama rute yang benar
                                                $editRoute =
                                                    Auth::user()->role == 'admin'
                                                        ? route('admin.rule.edit', $penyakit->id)
                                                        : route('dokter.rule.edit', $penyakit->id);
                                            @endphp
                                            <a href="{{ $editRoute }}" class="text-indigo-600 hover:text-indigo-900">
                                                Kelola Aturan
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                                            Data penyakit belum tersedia. Silakan tambah data penyakit terlebih dahulu.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8">

                <div>
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Ringkasan Sistem</h3>
                    <dl class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-5">
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Pengguna</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['pengguna'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Dokter</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['dokter'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Penyakit</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['penyakit'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Gejala</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['gejala'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Diagnosa</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['total_diagnosa'] }}</dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Akses Cepat</h3>
                    <div class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4"> 
                        <a href="{{ route('admin.gejala.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Gejala</p>
                            <p class="text-sm text-indigo-100 mt-1">Tambah, edit, atau hapus data gejala.</p>
                        </a>
                        <a href="{{ route('admin.penyakit.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Penyakit</p>
                            <p class="text-sm text-indigo-100 mt-1">Tambah, edit, atau hapus data penyakit.</p>
                        </a>
                        <a href="{{ route('admin.dokter.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Dokter</p>
                            <p class="text-sm text-indigo-100 mt-1">Tambah, edit, atau hapus data dokter.</p>
                        </a>
                        {{-- <a href="{{ route('admin.rule.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Aturan (Rule Base)</p>
                            <p class="text-sm text-indigo-100 mt-1">Hubungkan gejala dengan penyakit.</p>
                        </a> --}}
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl font-bold text-gray-800">Aktivitas Diagnosa Terakhir</h3>
                        <div class="mt-6 flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Nama Pasien</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Hasil Diagnosa</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @forelse ($aktivitasTerakhir as $aktivitas)
                                                <tr>
                                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $aktivitas->user->name }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $aktivitas->penyakit->nama_penyakit }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $aktivitas->created_at->diffForHumans() }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="px-3 py-10 text-center text-sm text-gray-500">
                                                        Belum ada aktivitas diagnosa yang tercatat.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\auth\confirm-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\forgot-password.blade.php =====
<x-guest-layout>
    <!-- Judul & Deskripsi -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Lupa Password Anda?</h2>
        <p class="text-sm text-gray-500 mt-2">Jangan khawatir. Masukkan email Anda dan kami akan mengirimkan link untuk mengatur ulang password Anda.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center mt-6">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Kirim Link Reset Password') }}
            </x-primary-button>
            
            <a class="mt-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Kembali ke Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\login.blade.php =====
<x-guest-layout>
    <!-- Judul Form -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali</h2>
        <p class="text-sm text-gray-500">Silakan masuk untuk melanjutkan</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center mt-6">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Masuk') }}
            </x-primary-button>
            
            @if (Route::has('register'))
                <p class="mt-4 text-sm text-gray-600">
                    Belum punya akun?
                    <a class="underline text-indigo-600 hover:text-indigo-800" href="{{ route('register') }}">
                        {{ __('Daftar di sini') }}
                    </a>
                </p>
            @endif
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\register.blade.php =====
<x-guest-layout>
    <!-- Judul Form -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Buat Akun Baru</h2>
        <p class="text-sm text-gray-500">Mulai perjalanan kesehatan Anda bersama kami</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center mt-6">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Daftar') }}
            </x-primary-button>
            
            <a class="mt-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\reset-password.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\verify-email.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>

===== resources\views\components\application-logo.blade.php =====
<svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
</svg>

===== resources\views\components\auth-session-status.blade.php =====
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif

===== resources\views\components\danger-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\dropdown-link.blade.php =====
<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

===== resources\views\components\dropdown.blade.php =====
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

===== resources\views\components\input-error.blade.php =====
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

===== resources\views\components\input-label.blade.php =====
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

===== resources\views\components\modal.blade.php =====
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>

===== resources\views\components\nav-link.blade.php =====
@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center gap-2 w-full px-4 py-2 rounded-lg bg-gray-200 text-gray-900 font-medium'
                : 'flex items-center gap-2 w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\primary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\responsive-nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\secondary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\text-input.blade.php =====
@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>

===== resources\views\diagnosa\hasil.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Diagnosa Anda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 space-y-6">

                    {{-- Gejala yang Dipilih Pengguna --}}
                    <div>
                        <h3 class="text-lg font-medium text-gray-700">Berdasarkan gejala yang Anda pilih:</h3>
                        <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                            @foreach($gejalaTerpilih as $gejala)
                                <li>{{ $gejala->nama_gejala }}</li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Hasil Diagnosa --}}
                    <div class="border-t pt-6">
                        <p class="text-lg font-medium text-gray-700">Diagnosa awal yang paling sesuai adalah:</p>
                        <h1 class="text-4xl font-bold text-indigo-600 mt-1">
                            {{ $diagnosaHistory->penyakit->nama_penyakit }}
                        </h1>
                    </div>

                    {{-- Deskripsi & Solusi --}}
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800">Deskripsi Penyakit</h4>
                        <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                            <p>{{ $diagnosaHistory->penyakit->deskripsi }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 border-t pt-6">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Saran Pencegahan</h4>
                            <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                <p>{{ $diagnosaHistory->penyakit->pencegahan ?? 'Informasi belum tersedia.' }}</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Saran Pengobatan</h4>
                            <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                <p>{{ $diagnosaHistory->penyakit->pengobatan ?? 'Informasi belum tersedia.' }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Disclaimer --}}
                    <div class="border-t pt-6 text-sm text-gray-500">
                        <p><strong>Penting:</strong> Hasil ini adalah diagnosa awal berdasarkan sistem pakar dan tidak menggantikan konsultasi medis profesional. Segera hubungi dokter untuk pemeriksaan lebih lanjut.</p>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('diagnosa.riwayat') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                            Lihat Semua Riwayat
                        </a>
                        <a href="{{ route('diagnosa.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900">
                            Ulangi Diagnosa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\diagnosa\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Mulai Diagnosa (Langkah 1 dari 2)') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800">Pilih Kategori Keluhan Utama</h3>
                    <p class="mt-2 text-gray-600">Untuk mempermudah, silakan pilih kategori yang paling sesuai dengan keluhan yang Anda rasakan saat ini.</p>
                    
                    <form action="{{ route('diagnosa.pilih-gejala') }}" method="POST" class="mt-6">
                        @csrf
                        <div class="space-y-4">
                            @forelse($kategoris as $kategori)
                                <label class="flex items-center p-4 border rounded-lg has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-400 cursor-pointer">
                                    <input type="radio" name="kategori" value="{{ $kategori }}" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 text-lg font-medium">{{ $kategori }}</span>
                                </label>
                            @empty
                                <p class="text-center text-gray-500">Belum ada kategori gejala yang tersedia.</p>
                            @endforelse
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Lanjutkan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\diagnosa\riwayat.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Diagnosa Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hasil Penyakit</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($riwayat as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->created_at->format('d M Y, H:i') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $item->penyakit->nama_penyakit }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('diagnosa.hasil', $item->id) }}" class="text-indigo-600 hover:text-indigo-900 font-medium">
                                                Lihat Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                                            Anda belum memiliki riwayat diagnosa.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $riwayat->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\diagnosa\select.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Mulai Diagnosa (Langkah 2 dari 2)') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800">Pilih Gejala yang Anda Rasakan</h3>
                    <p class="mt-2 text-gray-600">Pilih satu atau lebih gejala yang paling sesuai dari kategori <strong>{{ $kategori }}</strong>.</p>
                    
                    @if(session('error'))
                        <div class="mt-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('diagnosa.process') }}" method="POST" class="mt-6">
                        @csrf
                        <div class="space-y-4">
                            @foreach ($gejalas as $gejala)
                                <label class="flex items-center p-4 border rounded-lg has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-400 cursor-pointer">
                                    <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 rounded">
                                    <span class="ml-3 font-medium">{{ $gejala->nama_gejala }}</span>
                                </label>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between mt-6">
                             <a href="{{ route('diagnosa.index') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900">â† Kembali ke Kategori</a>
                            <x-primary-button>
                                {{ __('Lihat Hasil Diagnosa') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\diagnosa-backward\hasil.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Verifikasi Diagnosa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 space-y-6">

                    {{-- JIKA HIPOTESIS TERBUKTI, TAMPILKAN HASIL LENGKAP --}}
                    @if($terbukti)
                        {{-- Gejala yang Dikonfirmasi Pengguna --}}
                        <div>
                            <h3 class="text-lg font-medium text-gray-700">Berdasarkan gejala yang Anda konfirmasi:</h3>
                            <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                                @forelse($gejalaTerpilih as $gejala)
                                    <li>{{ $gejala->nama_gejala }}</li>
                                @empty
                                    <li>- Tidak ada gejala yang dikonfirmasi -</li>
                                @endforelse
                            </ul>
                        </div>

                        {{-- Hasil Diagnosa --}}
                        <div class="border-t pt-6">
                            <p class="text-lg font-medium text-gray-700">Hasil verifikasi menunjukkan kemungkinan besar Anda menderita:</p>
                            <h1 class="text-4xl font-bold text-indigo-600 mt-1">
                                {{ $penyakit->nama_penyakit }}
                            </h1>
                        </div>

                        {{-- Deskripsi Penyakit --}}
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Deskripsi Penyakit</h4>
                            <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                <p>{{ $penyakit->deskripsi }}</p>
                            </div>
                        </div>

                        {{-- Pencegahan dan Pengobatan --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 border-t pt-6">
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800">Saran Pencegahan</h4>
                                <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                    <p>{{ $penyakit->pencegahan ?? 'Informasi belum tersedia.' }}</p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800">Saran Pengobatan</h4>
                                <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                    <p>{{ $penyakit->pengobatan ?? 'Informasi belum tersedia.' }}</p>
                                </div>
                            </div>
                        </div>

                    {{-- JIKA HIPOTESIS TIDAK TERBUKTI, TAMPILKAN PESAN SEDERHANA --}}
                    @else
                        <div class="text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-100">
                                 <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                            </div>
                            <h3 class="mt-4 text-2xl font-bold text-gray-800">Hipotesis Tidak Terbukti</h3>
                            <p class="mt-2 text-gray-600">Berdasarkan jawaban Anda, kecil kemungkinan Anda menderita <strong>{{ $penyakit->nama_penyakit }}</strong>.</p>
                            <p class="mt-4 text-sm text-gray-500">Anda dapat mencoba memverifikasi penyakit lain atau menggunakan metode diagnosa (forward) untuk hasil yang lebih terbuka.</p>
                        </div>
                    @endif

                    {{-- Disclaimer & Tombol Aksi --}}
                    <div class="border-t pt-6 text-sm text-gray-500">
                        <p><strong>Penting:</strong> Hasil ini adalah diagnosa awal dan tidak menggantikan konsultasi medis profesional.</p>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('diagnosa-backward.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                            Verifikasi Lagi
                        </a>
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900">
                            Kembali ke Dashboard
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\diagnosa-backward\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagnosa Mundur (Backward Chaining)') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800">Verifikasi Hipotesis Penyakit</h3>
                    <p class="mt-2 text-gray-600">Pilih penyakit yang Anda curigai (hipotesis), dan sistem akan menanyakan gejala-gejala yang relevan untuk memverifikasi dugaan Anda.</p>
                    
                    @if(session('error'))
                        <div class="mt-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('diagnosa-backward.start') }}" method="POST" class="mt-6">
                        @csrf
                        <div>
                            <x-input-label for="penyakit_id" :value="__('Pilih Penyakit yang Dicurigai')" />
                            <select name="penyakit_id" id="penyakit_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="" disabled selected>-- Pilih salah satu --</option>
                                @foreach($penyakits as $penyakit)
                                    <option value="{{ $penyakit->id }}">{{ $penyakit->nama_penyakit }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('penyakit_id')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Mulai Verifikasi') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\diagnosa-backward\process.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proses Verifikasi Diagnosa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">

                    <p class="text-sm text-indigo-600 font-semibold">Hipotesis: {{ $penyakit->nama_penyakit }}</p>
                    <h3 class="mt-2 text-2xl font-bold text-gray-800">Apakah Anda mengalami gejala berikut?</h3>
                    
                    <div class="my-6 p-6 bg-indigo-50 rounded-lg text-center">
                        <p class="text-3xl font-medium text-indigo-900">{{ $gejala->nama_gejala }}</p>
                    </div>

                    <form action="{{ route('diagnosa-backward.answer') }}" method="POST">
                        @csrf
                        <div class="flex items-center justify-center gap-x-6">
                            <button type="submit" name="jawaban" value="tidak" class="rounded-md bg-white px-8 py-3 text-lg font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                Tidak
                            </button>
                            <button type="submit" name="jawaban" value="ya" class="rounded-md bg-indigo-600 px-8 py-3 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Ya
                            </button>
                        </div>
                    </form>

                    <div class="mt-8">
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ $progress }}%"></div>
                        </div>
                        <p class="text-sm text-center mt-2 text-gray-500">{{ $progress }}% Selesai</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\dokter\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Statistik Diagnosa Penyakit (12 Bulan Terakhir)</h3>
                    
                    {{-- Canvas untuk menampung grafik --}}
                    <div>
                        <canvas id="diseaseChart"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk Chart.js --}}
    @push('scripts')
        {{-- Load library Chart.js dari CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const ctx = document.getElementById('diseaseChart').getContext('2d');
                
                // Ambil data yang sudah kita siapkan dari controller
                const chartData = {!! $chartData !!};

                new Chart(ctx, {
                    type: 'bar', // Tipe grafik bar
                    data: chartData,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Jumlah Diagnosa per Bulan'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    // Pastikan sumbu Y hanya menampilkan angka bulat
                                    stepSize: 1
                                }
                            }
                        }
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\layouts\app.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>[x-cloak] { display: none !important; }</style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ sidebarOpen: false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <div
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto"
        >
            @include('layouts.navigation')
        </div>

        <!-- Overlay -->
        <div
            x-show="sidebarOpen"
            @click="sidebarOpen = false"
            x-cloak
            class="fixed inset-0 bg-black bg-opacity-25 z-20 md:hidden"
        ></div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col w-full">

            <!-- Mobile topbar -->
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <!-- Tombol hamburger -->
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            
                <!-- Judul di tengah -->
                <div class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>
            

            <!-- Optional header (desktop only) -->
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-7">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
    @stack('scripts')
</body>

</html>

===== resources\views\layouts\guest.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
            {{-- Logo --}}
            <div>
                <a href="/" class="text-2xl font-bold text-indigo-600 hover:text-indigo-700">
                    Klinik Andin
                </a>
            </div>

            {{-- Card Form --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

===== resources\views\layouts\navigation.blade.php =====
<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="block">
            <div class="flex items-center gap-x-3">
                {{-- Ikon Baru --}}
                <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white">
                        {{-- Ganti dengan SVG logo Anda jika ada, atau gunakan inisial --}}
                        <span class="text-lg font-bold">S</span>
                    </div>
                </div>

                {{-- Teks Logo --}}
                <div>
                    <p class="text-base font-bold text-gray-800 leading-tight">
                        Sistem Pakar
                    </p>
                    <p class="text-sm font-medium text-indigo-600">
                        Penyakit Tulang
                    </p>
                </div>
            </div>
        </a>
    </div>
    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard', 'admin.dashboard', 'dokter.dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- Tampilkan menu ini jika rolenya 'admin' ATAU 'dokter' --}}
        {{-- Menu Khusus Admin --}}
        @if (Auth::user()->role == 'admin')
            <x-nav-link :href="route('admin.gejala.index')" :active="request()->routeIs('admin.gejala.*')">
                {{ __('Gejala') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.penyakit.index')" :active="request()->routeIs('admin.penyakit.*')">
                {{ __('Penyakit') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.dokter.index')" :active="request()->routeIs('admin.dokter.*')">
                {{ __('Dokter') }}
            </x-nav-link>
        @endif

        {{-- Menu Khusus Dokter --}}
        @if (Auth::user()->role == 'dokter')
            <x-nav-link :href="route('dokter.gejala.index')" :active="request()->routeIs('dokter.gejala.*')">
                {{ __('Gejala') }}
            </x-nav-link>
            <x-nav-link :href="route('dokter.penyakit.index')" :active="request()->routeIs('dokter.penyakit.*')">
                {{ __('Penyakit') }}
            </x-nav-link>
            <x-nav-link :href="route('dokter.rule.index')" :active="request()->routeIs('dokter.rule.*')">
                {{ __('Rule Base') }}
            </x-nav-link>
        @endif
        {{-- Navigasi Khusus Pengguna Biasa --}}

        @if (Auth::user()->role == 'pengguna')
            <x-nav-link :href="route('diagnosa.index')" :active="request()->routeIs('diagnosa.index')">
                {{ __('Mulai Diagnosa') }}
            </x-nav-link>
            <x-nav-link :href="route('diagnosa.riwayat')" :active="request()->routeIs('diagnosa.riwayat')">
                {{ __('Riwayat Diagnosa') }}
            </x-nav-link>
            <x-nav-link :href="route('diagnosa-backward.index')" :active="request()->routeIs('diagnosa-backward.*')">
                {{ __('Verifikasi Penyakit') }}
            </x-nav-link>
        @endif

    </nav>
    <!-- User Dropdown -->
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>

===== resources\views\pages\kontak.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak Kami - Sistem Pakar</title>
    <meta name="description" content="Lokasi praktek dan kontak dokter Klinik Andin.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .link-underline {
            background: linear-gradient(to right, rgb(79 70 229), rgb(79 70 229)) left bottom/0 2px no-repeat;
            transition: background-size .25s ease;
        }

        .link-underline:hover {
            background-size: 100% 2px;
        }

        .shine::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent 30%, rgba(255, 255, 255, .25) 40%, transparent 60%);
            transform: translateX(-100%);
            transition: transform .6s ease;
            pointer-events: none;
        }

        .shine:hover::after {
            transform: translateX(100%);
        }
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <div class="relative min-h-screen flex flex-col">

        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            <div
                class="absolute -top-40 left-1/2 w-[46rem] aspect-[1/1] -translate-x-1/2 rounded-full bg-gradient-to-tr from-[#80ffc5]/30 to-[#7c3aed]/30 blur-3xl">
            </div>
            <div
                class="absolute -bottom-48 -right-10 w-[36rem] aspect-[1/1] rounded-full bg-gradient-to-tr from-[#7c3aed]/20 to-[#80ffc5]/20 blur-3xl">
            </div>
        </div>

        <header class="bg-white/70 backdrop-blur-md shadow-sm ring-1 ring-black/5 sticky top-0 z-50">
            <nav class="flex items-center justify-between p-5 lg:px-8 max-w-7xl mx-auto" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5 inline-flex items-center gap-2">
                        <span class="text-xl font-bold text-indigo-600">Sistem Pakar</span>
                    </a>
                </div>
                <div class="flex lg:flex-1 justify-end items-center gap-x-6">
                    <a href="{{ route('kontak') }}"
                        class="text-sm font-semibold leading-6 text-indigo-600 link-underline">Kontak</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 transition-colors">
                                Dashboard <span aria-hidden="true">â†’</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 transition-colors">
                                Log in <span aria-hidden="true">â†’</span>
                            </a>
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            <section class="bg-white">
                <div class="relative isolate px-6 pt-16 lg:px-8">
                    <div class="mx-auto max-w-2xl py-20 sm:py-28">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl" data-reveal>
                                Lokasi Praktek Dokter
                            </h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600" data-reveal data-reveal-delay="100">
                                Temukan dokter spesialis tulang terbaik kami di lokasi-lokasi berikut. Kami siap
                                memberikan pelayanan kesehatan tulang yang komprehensif untuk Anda.
                            </p>
                            <div class="mt-8 flex items-center justify-center gap-3 text-xs text-gray-500" data-reveal
                                data-reveal-delay="180">
                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-gray-50 px-3 py-1 ring-1 ring-gray-200">
                                    <span class="size-1.5 rounded-full bg-indigo-600"></span> Terverifikasi
                                </span>
                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-gray-50 px-3 py-1 ring-1 ring-gray-200">
                                    <span class="size-1.5 rounded-full bg-gray-800"></span> Jadwal Fleksibel
                                </span>
                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-gray-50 px-3 py-1 ring-1 ring-gray-200">
                                    <span class="size-1.5 rounded-full bg-gray-400"></span> Konsultasi Nyaman
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 py-20 sm:py-24">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:mx-0">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-reveal>Tim
                                Dokter Spesialis Kami</h2>
                        </div>

                        <ul role="list"
                            class="mx-auto mt-14 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                            @foreach ($kontakDokter as $kontak)
                                <li class="group relative" data-reveal>
                                    <div
                                        class="shine relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl">
                                        <div class="relative">
                                            <img class="aspect-[3/2] w-full object-contain bg-gray-100 transition-transform duration-500 group-hover:scale-[1.03]"
                                                src="{{ $kontak['foto'] }}"
                                                alt="Foto dokter {{ $kontak['nama_dokter'] }}">
                                            <div
                                                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent opacity-70">
                                            </div>
                                            <div
                                                class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full bg-white/90 px-3 py-1 text-xs font-medium text-gray-700 ring-1 ring-gray-200">
                                                <svg viewBox="0 0 20 20" class="size-4" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M3 9a7 7 0 1 0 14 0A7 7 0 0 0 3 9Zm7-4a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2H7a1 1 0 1 1 0-2h2V6a1 1 0 0 1 1-1Z" />
                                                </svg>
                                                Sistem Pakar
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <h3 class="font-semibold leading-8 tracking-tight text-gray-900 text-lg">
                                                {{ $kontak['nama_dokter'] }}
                                            </h3>
                                            <div class="mt-1 flex items-start gap-2 text-sm text-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="size-5 opacity-70">
                                                    <path fill-rule="evenodd"
                                                        d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.274 1.765 11.842 11.842 0 0 0 .979.57c.01.006.014.009.018.008l.006.003Z"
                                                        clip-rule="evenodd" />
                                                    <path d="M10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" />
                                                </svg>
                                                <span>{{ $kontak['tempat_praktek'] }}</span>
                                            </div>

                                            <a href="{{ $kontak['map_url'] }}" target="_blank"
                                                class="mt-5 inline-flex items-center gap-x-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition">
                                                Lihat di Peta
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 6.75V15m0 0v2.25m0-2.25h3.75m-3.75 0H5.25m11.25 0v2.25m0-2.25h-3.75m3.75 0h.375c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125h.375m-8.25 0v2.25m0-2.25h-3.75m3.75 0h.375a1.125 1.125 0 0 1 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125h.375M3 19.5h18" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12">
                <p class="text-center text-xs leading-5 text-gray-400">Â© {{ date('Y') }} Sistem Pakar. All rights
                    reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        (function() {
            const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const els = document.querySelectorAll('[data-reveal]');
            els.forEach((el) => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(16px)';
                el.style.transition = 'opacity .5s ease, transform .5s ease';
                const d = parseInt(el.getAttribute('data-reveal-delay') || '0', 10);
                el.style.transitionDelay = (d / 1000) + 's';
            });
            if (reduced) {
                els.forEach(el => {
                    el.style.opacity = 1;
                    el.style.transform = 'none';
                });
                return;
            }
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.style.opacity = 1;
                        e.target.style.transform = 'none';
                        io.unobserve(e.target);
                    }
                })
            }, {
                threshold: .12
            });
            els.forEach(el => io.observe(el));
        })();
    </script>
</body>

</html>

===== resources\views\profile\partials\delete-user-form.blade.php =====
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

===== resources\views\profile\partials\update-password-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\partials\update-profile-information-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8 text-gray-900 flex flex-col md:flex-row items-center justify-between gap-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">Selamat Datang, {{ Auth::user()->name }}!</h3>
                            <p class="mt-2 text-gray-600">Siap untuk memeriksa kesehatan tulang Anda? Klik tombol di samping untuk memulai diagnosa berdasarkan gejala yang Anda rasakan.</p>
                        </div>
                        <a href="{{ route('diagnosa.index') }}" class="w-full md:w-auto flex-shrink-0 rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white text-center shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-150">
                            Mulai Diagnosa Baru
                        </a>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-gray-800">Riwayat Diagnosa Terakhir</h3>
                            <a href="{{ route('diagnosa.riwayat') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Lihat Semua &rarr;</a>
                        </div>
                        
                        <div class="mt-6 border-t border-gray-200">
                            @forelse ($riwayatTerakhir as $riwayat)
                                <div class="py-4 flex items-center justify-between border-b border-gray-100">
                                    <div>
                                        <p class="font-semibold text-gray-800">{{ $riwayat->penyakit->nama_penyakit }}</p>
                                        <p class="text-sm text-gray-500">{{ $riwayat->created_at->format('d F Y, H:i') }}</p>
                                    </div>
                                    <a href="{{ route('diagnosa.hasil', $riwayat->id) }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                                        Lihat Detail
                                    </a>
                                </div>
                            @empty
                                <div class="py-10 text-center">
                                    <p class="text-gray-500">Anda belum memiliki riwayat diagnosa.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-400 p-6 rounded-lg">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-indigo-700">
                                Hasil diagnosa dari sistem ini adalah prediksi awal dan <strong class="font-semibold">tidak menggantikan konsultasi medis profesional</strong>. Untuk kepastian, silakan hubungi <a href="{{ route('kontak') }}" class="font-semibold underline">dokter atau klinik kami</a>.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\welcome.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar - Sistem Pakar Penyakit Tulang</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <div class="flex flex-col min-h-screen">

        {{-- resources/views/welcome.blade.php --}}

        <header class="absolute inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm ring-1 ring-gray-900/5">
            <nav class="flex items-center justify-between p-6 lg:px-8 max-w-7xl mx-auto" aria-label="Global">
                {{-- LOGO DI KIRI --}}
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="text-xl font-bold text-indigo-600">Sistem Pakar</span>
                    </a>
                </div>

                {{-- SEMUA LINK NAVIGASI DI KANAN --}}
                <div class="hidden lg:flex lg:items-center lg:gap-x-6">
                    <a href="{{ route('kontak') }}"
                        class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Kontak</a>

                    @if (Route::has('login'))
                        {{-- Garis Pemisah Vertikal --}}
                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>

                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Dashboard <span
                                    aria-hidden="true">&rarr;</span></a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Log in <span
                                    aria-hidden="true">&rarr;</span></a>
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            <div class="relative bg-white h-screen">
                <div class="mx-auto max-w-7xl">
                    <div class="relative z-10 lg:w-full lg:max-w-2xl">
                        {{-- Efek gradasi di samping --}}
                        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                            viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                            <polygon points="0,0 90,0 50,100 0,100" />
                        </svg>

                        <div class="relative py-32 px-6 sm:py-40 lg:py-56 lg:px-8 lg:pr-0">
                            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Sistem Pakar
                                    Diagnosa Penyakit Tulang</h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600">Dapatkan diagnosa awal untuk keluhan
                                    terkait kesehatan tulang Anda dengan cepat dan akurat berdasarkan pengetahuan para
                                    ahli.</p>
                                <div class="mt-10 flex items-center gap-x-6">
                                    <a href="{{ route('login') }}"
                                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai
                                        Diagnosa</a>
                                    <a href="#features" class="text-sm font-semibold leading-6 text-gray-900">Pelajari
                                        Lebih Lanjut <span aria-hidden="true">â†’</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kolom Gambar --}}
                <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img src="{{ asset('images/tulang.jpg') }}"
                         alt="Dokter memeriksa hasil rontgen"
                         class="h-full w-full object-contain">
                  </div>
                  
            </div>

            <section id="features" class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600">Layanan Kami</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Semua yang Anda
                            Butuhkan untuk Diagnosa Awal</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Sistem kami dirancang untuk memberikan kemudahan dan informasi yang akurat, membantu Anda
                            memahami kondisi kesehatan tulang Anda lebih baik.
                        </p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                            {{-- Feature 1 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.184m-1.5.184a6.01 6.01 0 01-1.5-.184m3.75 7.484V10.5m-3.75 7.484a6.01 6.01 0 01-1.5-.184m1.5.184a6.01 6.01 0 001.5-.184m-3.75 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm-2.25-2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15m0-4.5h.008v.008h-.008v-.008zm0-2.25h.008v.008h-.008V8.25" />
                                        </svg>
                                    </div>
                                    Diagnosa Berbasis Gejala
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Pilih gejala-gejala yang Anda alami
                                    dari daftar yang komprehensif untuk memulai proses diagnosa.</dd>
                            </div>
                            {{-- Feature 2 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 6a7.5 7.5 0 100 15 7.5 7.5 0 000-15z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197" />
                                        </svg>
                                    </div>
                                    Akurasi Tinggi
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Sistem kami menggunakan basis
                                    pengetahuan yang disusun oleh para ahli untuk memberikan hasil yang dapat
                                    diandalkan.</dd>
                            </div>
                            {{-- Feature 3 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                    </div>
                                    Informasi & Solusi
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Dapatkan deskripsi lengkap mengenai
                                    penyakit serta saran penanganan awal dari hasil diagnosa Anda.</dd>
                            </div>
                            {{-- Feature 4 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    Riwayat Diagnosa
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Semua hasil diagnosa Anda tersimpan
                                    dengan aman dan dapat diakses kembali kapan saja melalui riwayat Anda.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-400">&copy; {{ date('Y') }} Sistem Pakar. All
                        rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>

```


## Entry Points & Main Configs Content
```
===== public\index.php =====
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

===== artisan =====
#!/usr/bin/env php
<?php

use Illuminate\Foundation\Application;
use Symfony\Component\Console\Input\ArgvInput;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the command...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$status = $app->handleCommand(new ArgvInput);

exit($status);

===== resources\js\app.js =====
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

===== vite.config.js =====
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

===== config\app.php =====
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];

===== config\database.php =====
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

```

== Selesai ==
