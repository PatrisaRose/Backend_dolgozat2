<?php

use App\Http\Controllers\PartsController;
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

Route::get('parts', [PartsController::class , 'index']);
Route::get('parts/{id}', [PartsController::class , 'show']);

Route::post('parts', [PartsController::class , 'store']);

Route::put('parts/{id}', [PartsController::class , 'update']);
Route::delete('parts/{id}', [PartsController::class , 'destroy']);
