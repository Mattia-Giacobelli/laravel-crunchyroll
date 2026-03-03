<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{


    public function index()
    {

        $animes = Anime::with(['animationStudio', 'type', 'genres', 'subs', 'dubs', 'episodesList'])->get();

        return response()->json(
            [
                'success' => true,
                'data' => $animes
            ]
        );
    }

    public function show(Anime $anime)
    {
        $anime->load(['animationStudio', 'type', 'genres', 'subs', 'dubs', 'episodesList']);

        return response()->json([
            'success' => true,
            'data' => $anime
        ]);
    }
}
