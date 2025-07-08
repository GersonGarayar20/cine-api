<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */


Route::apiResource('/movies', App\Http\Controllers\Api\MovieController::class)
    ->only(['index', 'show', 'store', 'update', 'destroy']);
