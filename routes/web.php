<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminEmployeeController;

// ----------------- Employee Routes -----------------
Route::get('/employee/register', [EmployeeAuthController::class, 'showRegister']);
Route::post('/employee/register', [EmployeeAuthController::class, 'register']);

Route::get('/employee/login', [EmployeeAuthController::class, 'showLogin'])->name('login'); 
Route::post('/employee/login', [EmployeeAuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/employee/dashboard', [EmployeeAuthController::class, 'dashboard']);
});

// ----------------- Admin Routes -----------------
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login'); 
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard']);

    Route::get('/admin/employees', [AdminEmployeeController::class, 'index'])->name('admin.employees.index'); 
    Route::get('/admin/employees/create', [AdminEmployeeController::class, 'create'])->name('admin.employees.create');
    Route::post('/admin/employees', [AdminEmployeeController::class, 'store'])->name('admin.employees.store');
    Route::get('/admin/employees/{id}/edit', [AdminEmployeeController::class, 'edit'])->name('admin.employees.edit'); 
    Route::put('/admin/employees/{id}', [AdminEmployeeController::class, 'update'])->name('admin.employees.update'); 
    Route::delete('/admin/employees/{id}', [AdminEmployeeController::class, 'destroy'])->name('admin.employees.destroy'); 
});
