<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AdminController;


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [TaskController::class, 'index'])->name('dashboard');

    Route::resource('tasks', TaskController::class);
    Route::resource('attendances', AttendanceController::class);

    Route::middleware('admin')->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
        Route::put('admin/update', [AdminController::class, 'update'])->name('admin.update');
        Route::put('admin/change-password', [AdminController::class, 'changePassword'])->name('admin.change-password');
        Route::resource('users', AdminController::class);
    });
});
