<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/logout',[\App\Http\Controllers\DashboardController::class,'getLogout']);
Route::get('/dashboard',[\App\Http\Controllers\TeaksController::class,'index']);
Route::get('/filter',[\App\Http\Controllers\TeaksController::class,'index']);
Route::get('/create_teak',[\App\Http\Controllers\TeaksController::class,'create']);
Route::post('/store',[\App\Http\Controllers\TeaksController::class,'store'])->name('store');
Route::get('edit/{id}',[\App\Http\Controllers\TeaksController::class,'edit']);
Route::post('update/{id}',[\App\Http\Controllers\TeaksController::class,'update']);
Route::post('change_status/{id}',[\App\Http\Controllers\TeaksController::class,'change_status']);
Route::get('delete/{id}',[\App\Http\Controllers\TeaksController::class,'delete']);
Route::get('delete_all',[\App\Http\Controllers\TeaksController::class,'deleteAll']);
