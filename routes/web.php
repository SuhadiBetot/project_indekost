<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerApprovalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AdminApprovalController;

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
Route::get('/approval-owner', [OwnerApprovalController::class, 'approval'])->name('app-owner');

// Halaman Admin
Route::get('/admin-approval', [AdminApprovalController::class, 'approval'])->name('app-admin');