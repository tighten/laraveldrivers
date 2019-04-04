<?php

use App\Driver;

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
    $types = Driver::with('type')->get()->groupBy(function ($driver) {
        return $driver->type->name;
    })->sortKeys();

    return view('welcome', [
        'types' => $types,
    ]);
});
