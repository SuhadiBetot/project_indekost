<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
// Route::get('/dashboard_admin', function (){
//     return view('admin.dashboard_admin');
// })->name('dashboard_admin');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/approvalowner', [OwnerController::class, 'approval'])->name('approval');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    return 'halooo';
});
// Route::get('/admin-approval', [AdminApprovalController::class, 'approval'])->name('approval');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
