@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Álbumes</h2>
        <a href="{{ route('albums.create') }}" class="btn btn-success">Nuevo álbum</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver al dashboard</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Artista</th>
                    <th>Género</th>
                    <th>Fecha</th>
                    <th>Canciones</th>
                    <th>Explícito</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($albums as $album)
                <tr>
                    <td>{{ $album->titulo }}</td>
                    <td>{{ $album->artista }}</td>
                    <td>{{ $album->genero }}</td>
                    <td>{{ \Carbon\Carbon::parse($album->fecha_lanzamiento)->format('d/m/Y') }}</td>
                    <td>{{ $album->num_canciones }}</td>
                    <td>
                        @if($album->es_explicit)
                            <span class="badge bg-danger">Explícito</span>
                        @else
                            <span class="badge bg-success">No explícito</span>
                        @endif
                    </td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('albums.destroy', $album->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este álbum?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No hay álbumes registrados.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection