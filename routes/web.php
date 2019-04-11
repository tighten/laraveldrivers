<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('types', [TypeController::class, 'index'])->name('types.index');
Route::get('types/{type}', [TypeController::class, 'show'])->name('types.show');

Route::get('drivers/create', [DriverController::class, 'create'])->name('drivers.create');
Route::post('drivers', [DriverController::class, 'store'])->name('drivers.store');
