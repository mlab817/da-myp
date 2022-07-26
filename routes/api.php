<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/prexcs', function () {
    $data = \App\Models\Prexc::where('level', 0)->with('children.children')->get();
    return response()->json($data);
});

Route::post('/login', \App\Http\Controllers\API\LoginViaCredentialsController::class);

Route::get('/me', \App\Http\Controllers\API\MeController::class);

Route::post('/login-via-qr', \App\Http\Controllers\API\LoginViaQrController::class);
