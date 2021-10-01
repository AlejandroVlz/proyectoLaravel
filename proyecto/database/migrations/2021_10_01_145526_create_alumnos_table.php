<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
	    $table->string('nombre');
	    $table->string('apellido_pat');
	    $table->string('apellido_mat');
	    $table->integer('numero_celular');
	    $table->unsignedBigInteger('id_cuenta');
	    $table->foreign('id_cuenta')->references('id')->on('cuenta');

	    $table->unsignedBigInteger('id_grupo');
	    $table->foreign('id_grupo')->references('id')->on('grupo');

	    $table->unsignedBigInteger('id_carrera');
	    $table->foreign('id_carrera')->references('id')->on('carreras');
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
        Schema::dropIfExists('alumnos');
    }
}
