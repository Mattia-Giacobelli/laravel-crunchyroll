<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newGenre = new Genre();

        $newGenre->name = $data['name'];

        $newGenre->save();

        return redirect()->route('genre.show', $newGenre);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {

        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {

        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {

        $data = $request->all();

        $genre->name = $data['name'];

        $genre->update();

        return redirect()->route('genre.show', $genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {

        $genre->delete();

        return redirect()->route('genre.index');
    }
}
