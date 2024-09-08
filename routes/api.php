<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

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

Route::get('/workers', [WorkerController::class, 'index']);
Route::post('/workers', [WorkerController::class, 'store']);
Route::get('/workers/{worker}', [WorkerController::class, 'read']);
Route::patch('/workers/{worker}', [WorkerController::class, 'update']);
Route::delete('/workers/{worker}', [WorkerController::class, 'destroy']);
