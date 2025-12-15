<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\AdminAuthController;


//Route - Employee Auth
Route::get('/employee/register',[EmployeeAuthController::class, 'showRegister']);
Route::post('/employee/register',[EmployeeAuthController::class, 'register']);

Route::get('/employee/login',[EmployeeAuthController::class, 'showLogin']);
Route::get('/employee/login',[EmployeeAuthController::class, 'login']);

Route::get('/employee/dashboard',[EmployeeAuthController::class,'dashboard']);

//Route - Admin Auth
Route::get('/admin/login',[AdminAuthController::class,'showLogin']);
Route::post('/admin/login',[AdminAuthController::class,'login']);

Route::get('/admin/dashboard',[AdminAuthController::class,'dashboard']);