<?php

use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\MusicaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('musica', MusicaController::class);


Route::apiResource('album', AlbumController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
