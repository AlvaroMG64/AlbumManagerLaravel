@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Crear Álbum</h1>
    <form action="{{ route('albums.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Artista</label>
            <input type="text" name="artista" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Género</label>
            <input type="text" name="genero" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fecha de lanzamiento</label>
            <input type="date" name="fecha_lanzamiento" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Número de canciones</label>
            <input type="number" name="num_canciones" class="form-control" min="1" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="es_explicit" class="form-check-input" value="1">
            <label class="form-check-label">Contenido explícito</label>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-2">Guardar</button>
        <a href="{{ route('albums.index') }}" class="btn btn-secondary w-100">Cancelar</a>
    </form>
</div>
@endsection