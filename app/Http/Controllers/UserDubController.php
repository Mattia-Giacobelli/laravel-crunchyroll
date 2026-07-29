<?php

namespace App\Http\Controllers;

use App\Models\Dub;
use Illuminate\Http\Request;

class UserDubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dubs = Dub::all();

        // dd($dubs);

        return view('dub/user/index', compact('dubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dub.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect()->route('user.dub.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dub $dub)
    {

        return view('dub/user/show', compact('dub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dub $dub)
    {

        return view('dub/user/edit', compact('dub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dub $dub)
    {

        return redirect()->route('user.dub.show', $dub);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dub $dub)
    {

        return redirect()->route('user.dub.index');
    }
}
