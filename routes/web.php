<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function() {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', function() { return view('dashboard'); })->name('dashboard');

    Route::resource('albums', AlbumController::class)->middleware('auth');
});

require __DIR__.'/auth.php'; // Breeze login/register/logout