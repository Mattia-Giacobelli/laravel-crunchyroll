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

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animes = Anime::all();

        return view('anime/index', compact('animes'));
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

        return view('anime.create', compact('types', 'studios', 'genres', 'subs', 'dubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $data = $request->all();

        $newAnime = new Anime();

        $newAnime->original_name = $data['original_name'];
        $newAnime->name = $data['name'];
        $newAnime->plot = $data['plot'];
        $newAnime->animation_studio_id = $data['animation_studio_id'];
        $newAnime->type_id = $data['type_id'];
        $newAnime->episodes = $data['episodes'];
        $newAnime->episodes_duration = $data['episodes_duration'];
        $newAnime->vote = $data['vote'];
        $newAnime->release_date = $data['release_date'];
        $newAnime->end_date = $data['end_date'];


        // Ste completed based on date
        if ($data['end_date'] != null && $data['end_date'] <= date('Y-m-d')) {

            $newAnime->completed = true;
        } elseif ($data['end_date'] == null) {

            $newAnime->completed = false;
        } else {

            $newAnime->completed = false;
        }

        // Upload image and save path in database

        if (array_key_exists('cover', $data)) {

            $imgURL = Storage::putFile('anime/' . Str::slug($newAnime->name), $data['cover']);

            $newAnime->cover = $imgURL;
        }

        //Save anime

        $newAnime->save();

        //Attach the pivot data

        $newAnime->subs()->attach($data['subs']);
        $newAnime->dubs()->attach($data['dubs']);
        $newAnime->genres()->attach($data['genres']);


        return redirect()->route('anime.show', $newAnime);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {

        return view('anime.show', compact('anime'));
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

        return view('anime.edit', compact('types', 'studios', 'genres', 'subs', 'dubs', 'anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {

        // dd($request);

        $data = $request->all();

        $anime->original_name = $data['original_name'];
        $anime->name = $data['name'];
        $anime->plot = $data['plot'];
        $anime->animation_studio_id = $data['animation_studio_id'];
        $anime->type_id = $data['type_id'];
        $anime->episodes = $data['episodes'];
        $anime->episodes_duration = $data['episodes_duration'];
        $anime->vote = $data['vote'];
        $anime->release_date = $data['release_date'];
        $anime->end_date = $data['end_date'];


        // Ste completed based on date
        if ($data['end_date'] != null && $data['end_date'] <= date('Y-m-d')) {

            $anime->completed = true;
        } elseif ($data['end_date'] == null) {

            $anime->completed = false;
        } else {

            $anime->completed = false;
        }

        // Upload image and save path in database

        if (array_key_exists('cover', $data)) {

            //Delete the old image

            Storage::delete($anime->cover);

            $imgURL = Storage::putFile('anime/'  . Str::slug($anime->name), $data['cover']);

            $anime->cover = $imgURL;
        }

        //Save anime

        $anime->update();

        //Attach the pivot data

        $anime->subs()->sync($data['subs']);
        $anime->dubs()->sync($data['dubs']);
        $anime->genres()->sync($data['genres']);


        return redirect()->route('anime.show', $anime);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        //Delete related image

        Storage::delete($anime->cover);

        $anime->delete();

        return redirect()->route('anime.index');
    }
}
