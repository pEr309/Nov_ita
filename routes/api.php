<?php

use App\Http\Controllers\Compra__ProductosController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Models\Compra__Productos;
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

Route::apiResource('/rol',RolController::class);
Route::apiResource('/user',UserController::class);
Route::apiResource('/compra',CompraController::class);
Route::apiResource('/producto',ProductoController::class);
Route::apiResource('/Compra__Productos', Compra__ProductosController::class);