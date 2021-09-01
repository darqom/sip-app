<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // User Routes
    Route::get('/user/datatables', [UserController::class, 'datatables'])->name('user.datatables');
    Route::resource('/user', UserController::class)->except('show');
    // Role Routes
    Route::get('/role/datatables', [RoleController::class, 'datatables'])->name('role.datatables');
    Route::resource('/role', RoleController::class)->except('show');
    // Student Routes
    Route::get('/students', [StudentController::class, 'datatables'])->name('students.datatables');
    Route::resource('/students', StudentController::class);
});

Route::prefix('/student')->group(function () {
    require __DIR__ . '/student.php';
});

require __DIR__ . '/auth.php';
