@extends('layouts.app')

@section('title', 'Crear Álbum')

@section('content')
<div class="container">
    <div class="card shadow mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="text-center mb-4">Crear Nuevo Álbum</h3>
            <form action="{{ route('albums.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="artista" class="form-label">Artista</label>
                    <input type="text" name="artista" id="artista" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Género</label>
                    <input type="text" name="genero" id="genero" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento</label>
                    <input type="date" name="fecha_lanzamiento" id="fecha_lanzamiento" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="num_canciones" class="form-label">Número de canciones</label>
                    <input type="number" name="num_canciones" id="num_canciones" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contenido explícito</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="es_explicit" id="explicit_no" value="0" checked>
                        <label class="form-check-label text-success" for="explicit_no">No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="es_explicit" id="explicit_yes" value="1">
                        <label class="form-check-label text-danger" for="explicit_yes">Sí</label>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Crear Álbum</button>
                    <a href="{{ route('albums.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection