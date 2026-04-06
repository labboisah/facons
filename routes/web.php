<?php

use App\Http\Controllers\Auth\admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\lecturer\LoginController as LecturerLoginController;
use App\Http\Controllers\Auth\student\LoginController as StudentLoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Test route for toast notifications (remove in production)
Route::get('/test-toasts', function () {
    return view('auth.student.login');
})->name('test.toasts');

require __DIR__.'/auth.php';
require __DIR__.'/student.php';
require __DIR__.'/lecturer.php';
require __DIR__.'/admin.php';
