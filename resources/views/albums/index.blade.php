@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Álbumes</h1>

    <a href="/albums/create" class="btn btn-primary mb-3">
        Nuevo álbum
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Artista</th>
                <th>Género</th>
                <th>Fecha</th>
                <th>Canciones</th>
                <th>Explicit</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($albums as $album)
            <tr>
                <td>{{ $album->titulo }}</td>
                <td>{{ $album->artista }}</td>
                <td>{{ $album->genero }}</td>
                <td>{{ $album->fecha_lanzamiento }}</td>
                <td>{{ $album->num_canciones }}</td>
                <td>{{ $album->es_explicit ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="/albums/{{ $album->idAlbum }}/edit"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <form action="/albums/{{ $album->idAlbum }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection