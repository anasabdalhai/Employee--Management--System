<?php
// بدل كل تلك المسارات الطويلة للأقسام، يمكنك استبدالها بسطر واحد فقط:
// Route::resource('departments', DepartmentController::class);
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DepartmentController;
Route::resource('employees', EmployeeController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/departments', [DepartmentController::class, 'index'])
        
        ->name('departments.index');

    Route::get('/departments/create', [DepartmentController::class, 'create'])
       
        ->name('departments.create');

    Route::post('/departments', [DepartmentController::class, 'store'])
       
        ->name('departments.store');

    Route::get('/departments/{id}/edit', [DepartmentController::class, 'edit'])
     
        ->name('departments.edit');

    Route::put('/departments/{id}', [DepartmentController::class, 'update'])
     
        ->name('departments.update');

    Route::delete('/departments/{id}', [DepartmentController::class, 'destroy'])
       
        ->name('departments.destroy');
});

  // require __DIR__.'/dashboard.php';
require __DIR__.'/auth.php';
