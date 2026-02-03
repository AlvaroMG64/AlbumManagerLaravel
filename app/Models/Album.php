<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'artista',
        'genero',
        'fecha_lanzamiento',
        'num_canciones',
        'es_explicit'
    ];

    protected $casts = [
        'es_explicit' => 'boolean',
        'fecha_lanzamiento' => 'date',
    ];
}
