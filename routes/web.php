<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard protegido con auth
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// CRUD de álbumes protegido
Route::middleware(['auth'])->group(function () {
    Route::resource('albums', AlbumController::class);
});

require __DIR__.'/auth.php';<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard protegido
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// CRUD de álbumes protegido por auth
Route::middleware(['auth'])->group(function () {
    Route::resource('albums', AlbumController::class);
});

require __DIR__.'/auth.php';