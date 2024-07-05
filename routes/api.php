<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FileController;


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



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/anything', [FileController::class, 'index']);

Route::get('/any/{id}', [FileController::class, 'show']);

Route::post('/anything', [FileController::class, 'store']);

Route::post('/anything/{id}', [FileController::class, 'update']);

Route::delete('/anything/{id}', [FileController::class, 'destroy']);