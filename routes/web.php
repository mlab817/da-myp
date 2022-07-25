<?php

use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OperatingUnitController;
use App\Http\Controllers\PapController;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('offices', OfficeController::class);

Route::resource('operating-units', OperatingUnitController::class);

Route::resource('paps', PapController::class);

Route::resource('users', UserController::class);
