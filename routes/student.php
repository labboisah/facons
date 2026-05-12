<?php
use App\Http\Controllers\Auth\student\LoginController;

// Student Login Routes
Route::get('/student/login', [LoginController::class, 'create'])->name('student.login');
Route::post('/student/login', [LoginController::class, 'store'])->name('student.login.store');
Route::post('/student/logout', [LoginController::class, 'destroy'])->name('student.logout');

//student nav

Route::get('/student/bills', function () {
    return view('auth.student.bills');
})->middleware(['auth:student', 'verified'])->name('student.bills');  

Route::get('/student/courses-registration', function () {
    return view('auth.student.courses-registration');
})->middleware(['auth:student', 'verified'])->name('student.courses-registration');

Route::get('/student/academic-calendar', function () {
    return view('auth.student.academic-calendar');
})->middleware(['auth:student', 'verified'])->name('student.academic-calendar');

// Student Dashboard
Route::get('/student/dashboard', function () {
    return view('dashboards.student');
})->middleware(['auth:student', 'verified'])->name('student.dashboard');