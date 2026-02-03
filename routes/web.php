<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

// Página de bienvenida (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Dashboard protegido
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Devuelve la vista dashboard con datos del usuario actual
        return view('dashboard');
    })->name('dashboard');

    // CRUD de álbumes
    Route::resource('albums', AlbumController::class);
});

// Rutas de autenticación Breeze (login, register, password, etc.)
require __DIR__.'/auth.php';