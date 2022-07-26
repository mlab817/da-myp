<?php

use App\Http\Controllers\Auth\LoginViaSecretController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OperatingUnitController;
use App\Http\Controllers\PapController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('offices', OfficeController::class);

Route::resource('operating-units', OperatingUnitController::class);

Route::resource('paps', PapController::class);

Route::resource('users', UserController::class);

Route::post('/login-via-secret', LoginViaSecretController::class)
    ->name('login-via-secret');
