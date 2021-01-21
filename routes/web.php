<?php

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
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', \App\Http\Controllers\UsersController::class);
    Route::get('timeline/history', [\App\Http\Controllers\TimelineController::class, 'history'])->name('timeline.history');
    Route::patch('timeline/done/{timeline}', [\App\Http\Controllers\TimelineController::class, 'markasdone'])->name('timeline.markasdone');
    Route::patch('timeline/undone/{timeline}', [\App\Http\Controllers\TimelineController::class, 'markasundone'])->name('timeline.markasundone');
    Route::resource('timeline', \App\Http\Controllers\TimelineController::class);
    Route::resource('company', \App\Http\Controllers\CompanyController::class);
    Route::resource('administrative', \App\Http\Controllers\AdministrativeController::class);
    Route::resource('report', \App\Http\Controllers\ReportController::class);
    Route::resource('period', \App\Http\Controllers\PeriodController::class);
});
