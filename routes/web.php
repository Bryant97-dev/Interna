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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', \App\Http\Controllers\UsersController::class);
    Route::resource('timeline', \App\Http\Controllers\TimelineController::class);
    Route::resource('company', \App\Http\Controllers\CompanyController::class);
    Route::resource('administrative-data', \App\Http\Controllers\AdministrativeDataController::class);
});
