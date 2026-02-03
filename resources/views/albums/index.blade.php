@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Listado de Álbumes</h1>
    <a href="{{ route('albums.create') }}" class="btn btn-primary mb-3">Añadir Álbum</a>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Volver al Dashboard</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($albums->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Artista</th>
                <th>Género</th>
                <th>Fecha de Lanzamiento</th>
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
                <td>{{ $album->fecha_lanzamiento->format('d-m-Y') }}</td>
                <td>{{ $album->num_canciones }}</td>
                <td>{{ $album->es_explicit ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('¿Seguro que quieres eliminar este álbum?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No hay álbumes.</p>
    @endif
</div>
@endsection