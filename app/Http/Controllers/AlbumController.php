<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $request->validate([
            'titulo' => 'required|string|max:100',
            'artista' => 'required|string|max:100',
            'genero' => 'required|string|max:50',
            'fecha_lanzamiento' => 'required|date',
            'num_canciones' => 'required|integer|min:1',
            'es_explicit' => 'nullable|boolean',
        ]);

        Album::create($request->all());
        return redirect()->route('albums.index')->with('success', 'Álbum creado correctamente.');
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'artista' => 'required|string|max:100',
            'genero' => 'required|string|max:50',
            'fecha_lanzamiento' => 'required|date',
            'num_canciones' => 'required|integer|min:1',
            'es_explicit' => 'nullable|boolean',
        ]);

        $album->update($request->all());
        return redirect()->route('albums.index')->with('success', 'Álbum actualizado correctamente.');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Álbum eliminado correctamente.');
    }
}