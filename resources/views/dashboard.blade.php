@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="card text-center shadow">
        <div class="card-body">
            <h3 class="card-title mb-4">Panel de control</h3>
            <p><strong>Usuario:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <div class="mt-4 d-flex justify-content-center gap-2 flex-wrap">
                <a href="{{ route('albums.index') }}" class="btn btn-primary">Gestionar Álbumes</a>
            </div>
        </div>
    </div>
</div>
@endsection