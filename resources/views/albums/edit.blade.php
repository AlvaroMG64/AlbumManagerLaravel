@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fw-bold mb-4">Editar Álbum</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('albums.update', $album) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $album->titulo }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Artista</label>
            <input type="text" name="artista" class="form-control" value="{{ $album->artista }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Género</label>
            <input type="text" name="genero" class="form-control" value="{{ $album->genero }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de lanzamiento</label>
            <input type="date" name="fecha_lanzamiento" class="form-control" value="{{ $album->fecha_lanzamiento->format('Y-m-d') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de canciones</label>
            <input type="number" name="num_canciones" class="form-control" value="{{ $album->num_canciones }}" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="es_explicit" value="1" class="form-check-input" {{ $album->es_explicit ? 'checked' : '' }}>
            <label class="form-check-label">Explícito</label>
        </div>
        <button type="submit" class="btn btn-success">Actualizar Álbum</button>
        <a href="{{ route('albums.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection