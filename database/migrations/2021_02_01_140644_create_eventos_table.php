<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Codigo');
            $table->string('Nombre');
            $table->string('Foto');
            $table->string('Descripcion');
            $table->date('FechaInicio');
            $table->date('FechaFinalizacion');
            $table->string('Lugar');
            $table->string('Geolocalizacion');
            $table->integer('LocalidadID')->unsigned();
            //$table->foreign('LocalidadID')->references('id')->on('localidads');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
