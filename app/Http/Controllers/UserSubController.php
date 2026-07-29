<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;

class UserSubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subs = Sub::all();

        // dd($subs);

        return view('sub/user/index', compact('subs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('sub.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect()->route('user.sub.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sub $sub)
    {

        return view('sub/user/show', compact('sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sub $sub)
    {

        return view('sub/user/edit', compact('sub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sub $sub)
    {

        return redirect()->route('user.sub.show', $sub);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sub $sub)
    {

        return redirect()->route('user.sub.index');
    }
}
