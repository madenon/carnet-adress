<?php

use App\Http\Controllers\Api\CarnetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/carnets', [CarnetController::class, 'index']);
Route::post('/carnets/create', [CarnetController::class, 'StoreCarnet']);
Route::get('/carnets/view/{carnet}', [CarnetController::class, 'ViewCarnet']);
Route::put('/edit/{carnet}', [CarnetController::class, 'UpdateCarnet']);
Route::delete('/carnets/delete/{carnet}', [CarnetController::class, 'DeleteCarnet']);
