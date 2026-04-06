<?php
use App\Http\Controllers\Auth\admin\LoginController;
// Admin Login Routes
Route::get('/admin/login', [LoginController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'store'])->name('admin.login.store');
Route::post('/admin/logout', [LoginController::class, 'destroy'])->name('admin.logout');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('dashboards.admin');
})->middleware(['auth:web', 'verified'])->name('admin.dashboard');