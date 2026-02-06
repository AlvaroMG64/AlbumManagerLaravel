@extends('layouts.app')

@section('content')
<h2 class="mb-3">Editar Álbum</h2>

<form action="{{ route('albums.update', ['album' => $album->idAlbum]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $album->nombre }}" required>
    </div>
    <div class="mb-3">
        <label>Género</label>
        <input type="text" name="genero" class="form-control" value="{{ $album->genero }}" required>
    </div>
    <div class="mb-3">
        <label>Fecha de Lanzamiento</label>
        <input type="date" name="fecha_lanzamiento" class="form-control" value="{{ $album->fecha_lanzamiento }}" required>
    </div>
    <div class="mb-3">
        <label>Nº Canciones</label>
        <input type="number" name="num_canciones" class="form-control" value="{{ $album->num_canciones }}" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="es_explicit" class="form-check-input" {{ $album->es_explicit ? 'checked' : '' }}>
        <label class="form-check-label">Explicit</label>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('albums.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection