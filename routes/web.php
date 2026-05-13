<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::resource('employees', EmployeeController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('attendances', AttendanceController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('payrolls', PayrollController::class);
    Route::resource('leaves', LeaveController::class);
    Route::resource('sales', SalesController::class);
    Route::get('/reports', [ReportController::class, 'index'])
    ->name('reports.index');
});

require __DIR__.'/auth.php';