<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

// Redirigir la raíz al dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Resource albums
    Route::resource('albums', AlbumController::class);
});

// Breeze auth
require __DIR__.'/auth.php';