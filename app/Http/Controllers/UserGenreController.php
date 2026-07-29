<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class UserGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view('genre.user.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('genre.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect()->route('user.genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {

        return view('genre.user.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {

        return view('genre.user.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {

        return redirect()->route('user.genre.show', $genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {

        return redirect()->route('user.genre.index');
    }
}
