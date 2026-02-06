<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect()->route('albums.index');
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect()->route('albums.index');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index');
    }
}