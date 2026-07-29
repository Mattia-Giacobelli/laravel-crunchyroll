<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserEpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create(Anime $anime)
    {

        return view('episode.user.create', compact('anime'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Anime $anime)
    {

        return redirect()->route('user.anime.show', $anime);
    }

    /**
     * Display the specified resource.
     */
    public function show(Episode $episode)
    {

        return view('episode.user.show', compact('episode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episode $episode)
    {

        return view('episode.user.edit', compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode)
    {

        return redirect()->route('user.episode.show', $episode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode)
    {

        $anime = $episode->anime;

        return redirect('user/anime/' . $anime->id);
    }
}
