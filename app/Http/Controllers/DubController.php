<?php

namespace App\Http\Controllers;

use App\Models\Dub;
use Illuminate\Http\Request;

class DubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dubs = Dub::all();

        // dd($dubs);

        return view('dub/index', compact('dubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dub.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newDub = new Dub();

        $newDub->language = $data['language'];
        $newDub->iso_code = $data['iso_code'];

        $newDub->save();

        return redirect()->route('dub.show', $newDub);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dub $dub)
    {

        return view('dub/show', compact('dub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dub $dub)
    {

        return view('dub/edit', compact('dub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dub $dub)
    {

        $data = $request->all();

        $dub->language = $data['language'];
        $dub->iso_code = $data['iso_code'];

        $dub->update();

        return redirect()->route('dub.show', $dub);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dub $dub)
    {

        $dub->delete();

        return redirect()->route('dub.index');
    }
}
