<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;

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

Route::get('/carros', [CarrosController::class, 'index']);
Route::get('/carros/{car}', [CarrosController::class, 'show']);
Route::post('/carros', [CarrosController::class, 'create']);
Route::post('/carros/{id}', [CarrosController::class, 'update']);
Route::delete('/carros/{car}', [CarrosController::class, 'destroy']);