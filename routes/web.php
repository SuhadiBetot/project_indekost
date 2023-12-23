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

Auth::routes();

// Halaman User
Route::middleware(['auth', 'user-access:user', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/detail-kos', [DetailkosController::class, 'detail'])->name('detail-kos');
    Route::get('/pengajuan_sewa', [PengajuanController::class, 'pengajuansewa'])->name('user.pengajuan_sewa');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('user.profile');
    Route::get('/editprofile', [ProfileController::class, 'editprofile'])->name('user.editprofile');
    Route::get('/user-halamanselengkapnya', [HalamanSelengkapnyaController::class, 'detail'])->name('user.selengkapnya');
});

// Halaman Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardAdminController::class, 'dashboardAdmin'])->name('admin.dashboard_admin');
    Route::get('/admin-approval', [AdminApprovalController::class, 'approval'])->name('app-admin');
    Route::get('/transaksi-admin', [TransaksiAdminController::class, 'transaksi'])->name('trans-admin');
    Route::get('/admin-kelolaowner', [KelolaOwnerController::class, 'kelolaowner'])->name('kelola-admin');
});

// Halaman Owner
Route::middleware(['auth', 'user-access:owner', 'verified'])->group(function () {
    Route::get('/dashboard-owner', [OwnerController::class, 'dashboard'])->name('dash-owner');
    Route::get('/approval-owner', [OwnerApprovalController::class, 'approval'])->name('owner.approval_owner');
    Route::get('/data-kos', [OwnerKosController::class, 'data_kos'])->name('owner.data_kos');
    Route::get('/data-kos/create', [OwnerKosController::class, 'create'])->name('owner.data_kos_create');
    Route::post('/data-kos/store', [OwnerKosController::class, 'store'])->name('owner.data_kos_store');
    Route::get('/data-kos/edit/{OwnerDataKosts}', [OwnerKosController::class, 'edit'])->name('owner.data_kos_edit');
    Route::put('/data-kos/update/{OwnerDataKosts}', [OwnerKosController::class, 'update'])->name('owner.data_kos_update');
    Route::get('/data-kos/delete/{OwnerDataKosts}', [OwnerKosController::class, 'delete'])->name('owner.data_kos_delete');
});

//Auth
// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// Route::get('/register', [RegisterController::class, 'register'])->name('register');
// Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');
// Route::get('/forget', [ForgotPasswordController::class, 'forget'])->name('forget');
