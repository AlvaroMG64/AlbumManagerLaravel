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
        $albums = Album::orderBy('titulo')->get();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'artista' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'fecha_lanzamiento' => 'required|date',
            'num_canciones' => 'required|integer',
            'es_explicit' => 'nullable|boolean',
        ]);

        $data['es_explicit'] = $request->has('es_explicit');
        Album::create($data);

        return redirect()->route('albums.index')->with('success', 'Álbum creado correctamente');
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'artista' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'fecha_lanzamiento' => 'required|date',
            'num_canciones' => 'required|integer',
            'es_explicit' => 'nullable|boolean',
        ]);

        $data['es_explicit'] = $request->has('es_explicit');
        $album->update($data);

        return redirect()->route('albums.index')->with('success', 'Álbum actualizado correctamente');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Álbum eliminado correctamente');
    }
}