<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id('idAlbum');
            $table->string('titulo');
            $table->string('artista');
            $table->string('genero', 100);
            $table->date('fecha_lanzamiento');
            $table->integer('num_canciones');
            $table->boolean('es_explicit')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('albums');
    }
};