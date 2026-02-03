@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="card p-4 shadow mx-auto" style="max-width:500px;">
        <h2>Panel de control</h2>
        <p><strong>Usuario:</strong> {{ auth()->user()->idusuario ?? auth()->user()->email }}</p>
        <p><strong>Nombre completo:</strong> {{ auth()->user()->nombre ?? '' }} {{ auth()->user()->apellidos ?? '' }}</p>
        <p><strong>Inicio de sesión:</strong> {{ now()->format('d-m-Y H:i:s') }}</p>
        <a href="{{ route('albums.index') }}" class="btn btn-primary mb-2 w-100">Gestionar álbumes</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger w-100">Cerrar sesión</button>
        </form>
    </div>
</div>
@endsection