<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EpisodeController extends Controller
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

        return view('episode.create', compact('anime'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Anime $anime)
    {


        $data = $request->all();
        // dd($data);

        if (array_key_exists('cover', $data)) {

            $imgURL = Storage::putFile('anime/' . Str::slug($anime->name), $data['cover']);
        }

        $episode = $anime->episodesList()->create([
            'number'   => $data['number'],
            'title'    => $data['title'],
            'plot'     => $data['plot'],
            'cover'    => $imgURL,
            'duration' => $data['duration']

        ]);

        $anime->episodes = $anime->episodes + 1;
        $anime->update();

        return redirect()->route('episode.show', $episode);
    }

    /**
     * Display the specified resource.
     */
    public function show(Episode $episode)
    {

        return view('episode.show', compact('episode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episode $episode)
    {

        return view('episode.edit', compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode)
    {
        $data = $request->all();

        $episode->number = $data['number'];
        $episode->title = $data['title'];
        $episode->plot = $data['plot'];
        $episode->duration = $data['duration'];

        if (array_key_exists('cover', $data)) {

            $anime = $episode->anime;

            //Delete the old image

            Storage::delete($episode->cover);

            $imgURL = Storage::putFile('anime/'  . Str::slug($anime->name), $data['cover']);

            $episode->cover = $imgURL;
        }

        $episode->update();

        return redirect()->route('episode.show', $episode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode)
    {
        Storage::delete($episode->cover);

        $episode->delete();

        $anime = $episode->anime;

        //Update episodes number
        $anime->episodes = $anime->episodes - 1;

        return redirect('anime/' . $anime->id);
    }
}
