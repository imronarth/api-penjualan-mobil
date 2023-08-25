<?php

use App\Http\Controllers\CarController;
use Illuminate\Database\Query\IndexHint;
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
Route::get('/cars', [CarController::class, 'index'])->name("cars-index");
Route::get('/cars/{id}', [CarController::class, 'show'])->name("cars-show");
Route::post('/cars', [CarController::class, 'store'])->name("cars-post");
Route::patch('/cars/{id}', [CarController::class, 'update'])->name("cars-update");
Route::delete('/cars/{id}',         [CarController::class, 'destroy'])->name("cars-destroy");
