<?php

use App\Http\Controllers\Api\AnimeController;
use App\Http\Controllers\Api\EpisodeController;
use App\Http\Controllers\Api\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Anime index
Route::get('/animes', [AnimeController::class, 'index']);

//Anime show
Route::get('/animes/{anime}', [AnimeController::class, 'show']);

//Episode show
Route::get('/episodes/{episode}', [EpisodeController::class, 'show']);

//Genres index
Route::get('/genres', [GenreController::class, 'index']);

//Genres animes index
Route::get('/genres/{genre}', [GenreController::class, 'animeIndex']);
