<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Codigo');
            $table->string('Descripcion');
            $table->integer('CodigoPostal');
            $table->integer('CodigoArea');
            $table->integer('ProvinciaID')->unsigned();
            //$table->foreign('ProvinciaID')->references('id')->on('provincias');
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
        Schema::dropIfExists('localidads');
    }
}
