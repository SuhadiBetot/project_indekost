<?php

use App\Http\Controllers\TransaksiAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerApprovalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\OwnerKosController;
use App\Http\Controllers\AdminApprovalController;
use App\Http\Controllers\DashboardAdminController;


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

// Halaman Owner
Route::get('/dashboard-owner', [OwnerController::class, 'dashboard'])->name('dash-owner');
// Route::get('/data_kos-owner', [OwnerKosController::class, 'data_kos'])->name('data_kos');
Route::get('/approval-owner', [OwnerApprovalController::class, 'approval'])->name('owner.approval_owner');
Route::get('/data_kos', [OwnerKosController::class, 'data_kos'])->name('owner.data_kos');


// Halaman Admin
Route::get('/admin-approval', [AdminApprovalController::class, 'approval'])->name('app-admin');
Route::get('/transaksi-admin', [TransaksiAdminController::class, 'transaksi'])->name('trans-admin');
Route::get('/admin-dashboard', [DashboardAdminController::class, 'dashboardAdmin'])->name('admin.dashboard_admin');
