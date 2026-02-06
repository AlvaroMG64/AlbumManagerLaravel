@extends('layouts.app')

@section('title', 'Listado de Álbumes')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Listado de Álbumes</h1>

    <div class="text-center mb-3">
        <a href="{{ route('albums.create') }}" class="btn btn-success">Añadir nuevo álbum</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver al dashboard</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($albumes as $album)
        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $album->titulo }}</h5>
                    <p class="card-text mb-1"><strong>Artista:</strong> {{ $album->artista }}</p>
                    <p class="card-text mb-1"><strong>Género:</strong> {{ $album->genero }}</p>
                    <p class="card-text mb-1"><strong>Fecha de lanzamiento:</strong> {{ $album->fecha_lanzamiento->format('d/m/Y') }}</p>
                    <p class="card-text mb-1"><strong>Número de canciones:</strong> {{ $album->num_canciones }}</p>
                    <p class="badge-explicit {{ $album->es_explicit ? 'explicit-yes' : 'explicit-no' }}">
                        {{ $album->es_explicit ? 'Explícito' : 'No explícito' }}
                    </p>
                </div>
                <div class="card-footer text-center d-flex gap-2 justify-content-center flex-wrap">
                    <a href="{{ route('albums.edit', $album) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('albums.destroy', $album) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este álbum?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection