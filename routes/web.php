<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OwnerKosController;
use App\Http\Controllers\DetailkosController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KelolaOwnerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminApprovalController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OwnerApprovalController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\TransaksiAdminController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HalamanSelengkapnyaController;
use App\Http\Controllers\KamarKamiController;
use App\Http\Controllers\SewaController;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|y
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {return view('welcome');});
Route::get('/', [LandingPageController::class, 'landingpage'])->name('landing');
Route::get('/register-user', [RegisterController::class, 'registerUser'])->name('register.user');
Route::get('/register-owner', [RegisterController::class, 'registerOwner'])->name('register.owner');

// Verification Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

// Halaman Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardAdminController::class, 'dashboardAdmin'])->name('admin.dashboard_admin');
    Route::get('/admin-approval', [AdminApprovalController::class, 'approval'])->name('app-admin');
    Route::get('/admin-approval/detail/{ownerDataKosts}', [AdminApprovalController::class, 'detail'])->name('app-admin-detail');
    Route::post('/admin-approval/update/{ownerDataKosts}', [AdminApprovalController::class, 'updateStatus'])->name('app-admin-update');
    Route::post('/admin-approval/delete/{ownerDataKosts}', [AdminApprovalController::class, 'destroy'])->name('app-admin-delete');
    Route::get('/transaksi-admin', [TransaksiAdminController::class, 'transaksi'])->name('trans-admin');
    Route::get('/admin-kelolaowner', [KelolaOwnerController::class, 'kelolaowner'])->name('kelola-admin');
    Route::get('/admin-kelolaowner/{owner}', [KelolaOwnerController::class, 'show'])->name('kelolaowner.show');

    // Route::get('/siswa_admin', [SiswaController::class, 'siswa_admin'])->name('siswa');
    // Route::get('/siswa_admin{siswa}', [SiswaController::class, 'show'])->name('siswa.show');
});

// Halaman Owner
Route::middleware(['auth', 'user-access:owner', 'verified'])->group(function () {
    Route::get('/dashboard-owner', [OwnerController::class, 'dashboard'])->name('dash-owner');
    Route::get('/approval-owner', [OwnerApprovalController::class, 'approval'])->name('owner.approval_owner');
    Route::patch('/approval-owner/approval/konfirmasi/{sewa}', [OwnerApprovalController::class, 'konfirmasi'])->name('owner.approval_owner_konfirmasi');
    Route::patch('/approval-owner/approval/tertolak/{sewa}', [OwnerApprovalController::class, 'tolak'])->name('owner.approval_owner_tertolak');

    Route::get('/data-kos', [OwnerKosController::class, 'data_kos'])->name('owner.data_kos');
    Route::get('/data-kos/create', [OwnerKosController::class, 'create'])->name('owner.data_kos_create');
    Route::post('/data-kos/store', [OwnerKosController::class, 'store'])->name('owner.data_kos_store');
    Route::get('/data-kos/edit/{OwnerDataKosts}', [OwnerKosController::class, 'edit'])->name('owner.data_kos_edit');
    Route::put('/data-kos/update/{OwnerDataKosts}', [OwnerKosController::class, 'update'])->name('owner.data_kos_update');
    Route::get('/data-kos/delete/{OwnerDataKosts}', [OwnerKosController::class, 'delete'])->name('owner.data_kos_delete');
});

// Route Profile untuk user dan owner

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/edit/{id}', [ProfileController::class, 'editProfile'])->name('edit.profile.form');
    Route::put('/profile/edit/{id}', [ProfileController::class, 'updateProfile'])->name('edit.profile');
});


// Halaman user
Route::middleware(['auth', 'verified', 'user-access:user'])->group(function () {
    Route::get('/kamar-kami', [KamarKamiController::class, 'index'])->name('kamar-kami');
    Route::get('/detail-kos/{ownerDataKosts}', [KamarKamiController::class, 'detail'])->name('detail-kos');
    Route::post('/pengajuan-sewa/proses', [SewaController::class, 'process'])->name('pengajuan-sewa-proses');
    Route::get('/pengajuan_sewa/checkout/{sewa}', [SewaController::class, 'checkout'])->name('pengajuan-sewa-checkout');
    Route::get('/pengajuan_sewa/checkout/success/{sewa}', [SewaController::class, 'success'])->name('pengajuan-sewa-success');
    // Route::post('/pengajuan_sewa/checkout/success/finishing/{sewa}', [SewaController::class, 'finishing'])->name('pengajuan-sewa-finishing');
    // Route::post('/simpan-data-transaksi', [SewaController::class, 'simpanDataTransaksi'])->name('simpan-data-transaksi');

    // Route::get('/profile', [ProfileController::class, 'profile'])->name('user.profile');
    // Route::put('/profile/edit/{id}', [ProfileController::class, 'ngubah_profile_form'])->name('edit.profile.form');
    // Route::put('/profile/update/{id}', [ProfileController::class, 'editProfile'])->name('edit.profile');

    Route::get('/user-halamanselengkapnya', [HalamanSelengkapnyaController::class, 'detail'])->name('user.selengkapnya');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('verified');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
});

Auth::routes(['verify' => true]);
