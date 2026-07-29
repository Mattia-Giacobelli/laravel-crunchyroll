<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\DubController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserAnimeController;
use App\Http\Controllers\UserDubController;
use App\Http\Controllers\UserEpisodeController;
use App\Http\Controllers\UserGenreController;
use App\Http\Controllers\UserSubController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/debug-routes', function () {
    $routes = collect(\Illuminate\Support\Facades\Route::getRoutes())->map(function ($route) {
        return $route->uri() . ' -> ' . ($route->getName() ?? '(senza nome)');
    });
    return response()->json($routes->values());
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('anime', AnimeController::class)->middleware(['auth', 'verified', 'role']);

Route::resource('genre', GenreController::class)->middleware(['auth', 'verified', 'role']);

Route::resource('type', TypeController::class)->middleware(['auth', 'verified', 'role']);

Route::resource('sub', SubController::class)->middleware(['auth', 'verified', 'role']);

Route::resource('dub', DubController::class)->middleware(['auth', 'verified', 'role']);

Route::get('/episode/create/{anime}', [EpisodeController::class, 'create'])->name('anime.episode.create');

Route::post('/episode/store/{anime}', [EpisodeController::class, 'store'])->name('anime.episode.store');

Route::resource('episode', EpisodeController::class)->middleware(['auth', 'verified', 'role']);

Route::get('/esercizio', function () {
    return view('esercizio.esercizio');
});

//user routes

Route::resource('user/anime', UserAnimeController::class)->names('user.anime')->middleware(['auth', 'verified']);

Route::resource('user/genre', UserGenreController::class)->names('user.genre')->middleware(['auth', 'verified']);

Route::resource('user/type', UserTypeController::class)->names('user.type')->middleware(['auth', 'verified']);

Route::resource('user/sub', UserSubController::class)->names('user.sub')->middleware(['auth', 'verified']);

Route::resource('user/dub', UserDubController::class)->names('user.dub')->middleware(['auth', 'verified']);

Route::get('/user/episode/create/{anime}', [UserEpisodeController::class, 'create'])->name('user.anime.episode.create');

Route::post('/user/episode/store/{anime}', [UserEpisodeController::class, 'store'])->name('user.anime.episode.store');

Route::resource('user/episode', UserEpisodeController::class)->names('user.episode')->middleware(['auth', 'verified']);



require __DIR__ . '/auth.php';
