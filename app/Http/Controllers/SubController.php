<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subs = Sub::all();

        // dd($subs);

        return view('sub/index', compact('subs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('sub.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newsub = new Sub();

        $newsub->language = $data['language'];
        $newsub->iso_code = $data['iso_code'];

        $newsub->save();

        return redirect()->route('sub.show', $newsub);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sub $sub)
    {

        return view('sub/show', compact('sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sub $sub)
    {

        return view('sub/edit', compact('sub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sub $sub)
    {

        $data = $request->all();

        $sub->language = $data['language'];
        $sub->iso_code = $data['iso_code'];

        $sub->update();

        return redirect()->route('sub.show', $sub);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sub $sub)
    {

        $sub->delete();

        return redirect()->route('sub.index');
    }
}
