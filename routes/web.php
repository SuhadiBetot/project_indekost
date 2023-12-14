<?php

use App\Http\Controllers\DetailkosController;
use App\Http\Controllers\TransaksiAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerApprovalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\OwnerKosController;
use App\Http\Controllers\AdminApprovalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KelolaOwnerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PengajuanController;

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

//Auth
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Halaman Owner
Route::get('/dashboard-owner', [OwnerController::class, 'dashboard'])->name('dash-owner');
// Route::get('/data_kos-owner', [OwnerKosController::class, 'data_kos'])->name('data_kos');
Route::get('/approval-owner', [OwnerApprovalController::class, 'approval'])->name('owner.approval_owner');
Route::get('/data-kos', [OwnerKosController::class, 'data_kos'])->name('owner.data_kos');


// Halaman Admin
Route::get('/admin-approval', [AdminApprovalController::class, 'approval'])->name('app-admin');
Route::get('/transaksi-admin', [TransaksiAdminController::class, 'transaksi'])->name('trans-admin');
Route::get('/admin-dashboard', [DashboardAdminController::class, 'dashboardAdmin'])->name('admin.dashboard_admin');
Route::get('/admin-kelolaowner', [KelolaOwnerController::class, 'kelolaowner'])->name('kelola-admin');

// Halaman user
Route::get('/landingpage', [LandingPageController::class, 'landingpage'])->name('landing');
Route::get('/detail-kos', [DetailkosController::class, 'detail'])->name('detail-kos');
Route::get('/pengajuan_sewa', [PengajuanController::class, 'pengajuansewa'])->name('user.pengajuan_sewa');
