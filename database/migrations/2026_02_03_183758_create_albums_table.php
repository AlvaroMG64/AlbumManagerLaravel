<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id('idAlbum');
            $table->string('titulo', 100);
            $table->string('artista', 100);
            $table->string('genero', 50);
            $table->date('fecha_lanzamiento');
            $table->integer('num_canciones');
            $table->boolean('es_explicit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('albumes');
    }
};