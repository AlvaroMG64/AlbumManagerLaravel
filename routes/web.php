<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard (solo vista)
Route::get('/dashboard', function () {
    return redirect('/albums');
})->middleware('auth')->name('dashboard');

// CRUD de álbumes
Route::resource('albums', AlbumController::class);

require __DIR__.'/auth.php';