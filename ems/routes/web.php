<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DepartmentController;

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/mydashboard', function () {
    return view('layouts.dashboard');
})->name('mydashboard');;
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Departments


   Route::get('/departments', [DepartmentController::class, 'index'])
        
        ->name('dashboard.Department.index');
require __DIR__.'/auth.php';
