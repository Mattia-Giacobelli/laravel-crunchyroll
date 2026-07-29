<?php

namespace App\Http\Controllers;

use App\Models\AnimationStudio;
use App\Models\Anime;
use App\Models\Dub;
use App\Models\Genre;
use App\Models\Sub;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animes = Anime::all();

        return view('anime/user/index', compact('animes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $types = Type::all();

        $studios = AnimationStudio::all();

        $genres = Genre::all();

        $subs = Sub::all();

        $dubs = Dub::all();

        // dd($dubs

        return view('anime.user.create', compact('types', 'studios', 'genres', 'subs', 'dubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect()->route('user.anime.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {

        return view('anime.user.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {

        $types = Type::all();

        $studios = AnimationStudio::all();

        $genres = Genre::all();

        $subs = Sub::all();

        $dubs = Dub::all();

        // dd($dubs

        return view('anime.user.edit', compact('types', 'studios', 'genres', 'subs', 'dubs', 'anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {

        return redirect()->route('user.anime.show', $anime);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {

        return redirect()->route('user.anime.index');
    }
}
