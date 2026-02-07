@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Álbumes</h1>
        <a href="{{ route('albums.create') }}" class="btn btn-primary">
            + Nuevo álbum
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-4">
    @foreach ($albums as $album)
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $album->titulo }}</h5>
                <p class="card-text mb-1"><strong>Artista:</strong> {{ $album->artista }}</p>
                <p class="card-text mb-1"><strong>Género:</strong> {{ $album->genero }}</p>
                <p class="card-text mb-1"><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($album->fecha_lanzamiento)->format('d/m/Y') }}</p>
                <p class="card-text mb-1"><strong>Número de canciones:</strong> {{ $album->num_canciones }}</p>
                <p class="badge {{ $album->es_explicit ? 'bg-danger' : 'bg-success' }}">
                    {{ $album->es_explicit ? 'Explícito' : 'No explícito' }}
                </p>
            </div>

            <div class="card-footer text-center d-flex gap-2 justify-content-center flex-wrap">
                <a href="{{ route('albums.edit', $album) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('albums.destroy', $album) }}" method="POST">
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