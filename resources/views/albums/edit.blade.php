@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="mb-4">Editar Álbum</h3>

            <form method="POST" action="{{ route('albums.update', $album->id) }}" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $album->titulo) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Artista</label>
                    <input type="text" name="artista" class="form-control" value="{{ old('artista', $album->artista) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" name="genero" class="form-control" value="{{ old('genero', $album->genero) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de lanzamiento</label>
                    <input type="date" name="fecha_lanzamiento" class="form-control" value="{{ old('fecha_lanzamiento', $album->fecha_lanzamiento) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Número de canciones</label>
                    <input type="number" name="num_canciones" min="1" class="form-control" value="{{ old('num_canciones', $album->num_canciones) }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Contenido explícito</label>
                    <div class="border rounded p-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="es_explicit" id="explicit_no" value="0" {{ $album->es_explicit == 0 ? 'checked' : '' }}>
                            <label class="form-check-label text-success fw-semibold" for="explicit_no">No</label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="es_explicit" id="explicit_yes" value="1" {{ $album->es_explicit == 1 ? 'checked' : '' }}>
                            <label class="form-check-label text-danger fw-semibold" for="explicit_yes">Sí</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning w-100">Guardar Cambios</button>
                <a href="{{ route('albums.index') }}" class="btn btn-secondary w-100 mt-2">Cancelar</a>
            </form>
        </div>
    </div>
</div>

<script>
(() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>
@endsection
