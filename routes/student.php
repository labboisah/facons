<?php
use App\Http\Controllers\Auth\student\LoginController;

// Student Login Routes
Route::get('/student/login', [LoginController::class, 'create'])->name('student.login');
Route::post('/student/login', [LoginController::class, 'store'])->name('student.login.store');
Route::post('/student/logout', [LoginController::class, 'destroy'])->name('student.logout');

// Student Dashboard
Route::get('/student/dashboard', function () {
    return view('dashboards.student');
})->middleware(['auth:student', 'verified'])->name('student.dashboard');