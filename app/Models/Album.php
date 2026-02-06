<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';

    protected $primaryKey = 'idAlbum';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'titulo',
        'artista',
        'genero',
        'fecha_lanzamiento',
        'num_canciones',
        'es_explicit',
    ];

    public function getRouteKeyName()
    {
        return 'idAlbum';
    }
}
