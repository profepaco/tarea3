<?php

use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\v1\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/api/v1/users', UserController::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::apiResource('/api/v1/productos', ProductoController::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');
Route::post('/api/v1/login',[LoginController::class,'login']);