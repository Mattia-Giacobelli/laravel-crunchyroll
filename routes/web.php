<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\DubController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('anime', AnimeController::class)->middleware(['auth', 'verified']);

Route::resource('genre', GenreController::class)->middleware(['auth', 'verified']);

Route::resource('type', TypeController::class)->middleware(['auth', 'verified']);

Route::resource('sub', SubController::class)->middleware(['auth', 'verified']);

Route::resource('dub', DubController::class)->middleware(['auth', 'verified']);

Route::get('/episode/create/{anime}', [EpisodeController::class, 'create'])->name('anime.episode.create');

Route::post('/episode/store/{anime}', [EpisodeController::class, 'store'])->name('anime.episode.store');

Route::resource('episode', EpisodeController::class)->middleware(['auth', 'verified']);





require __DIR__ . '/auth.php';
