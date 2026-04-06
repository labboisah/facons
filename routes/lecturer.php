<?php
use App\Http\Controllers\Auth\lecturer\LoginController;
// Lecturer Login Routes
Route::get('/lecturer/login', [LoginController::class, 'create'])->name('lecturer.login');
Route::post('/lecturer/login', [LoginController::class, 'store'])->name('lecturer.login.store');
Route::post('/lecturer/logout', [LoginController::class, 'destroy'])->name('lecturer.logout');

// Lecturer Dashboard
Route::get('/lecturer/dashboard', function () {
    return view('dashboards.lecturer');
})->middleware(['auth:lecturer', 'verified'])->name('lecturer.dashboard');