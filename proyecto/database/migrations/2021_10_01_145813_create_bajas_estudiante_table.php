<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajasEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas_estudiante', function (Blueprint $table) {
            $table->id();
	    $table->unsignedBigInteger('id_alumno');
	    $table->foreign('id_alumno')->references('id')->on('alumnos');
	    $table->unsignedBigInteger('id_carrera');
	    $table->foreign('id_carrera')->references('id')->on('carreras');
	    $table->unsignedBigInteger('id_administrativo');
	    $table->foreign('id_administrativo')->references('id')->on('administrativos');
	    $table->enum('motivo_baja', ['economicos', 'extras'. 'cambio_escuela', 'matrimonio']);
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
        Schema::dropIfExists('bajas_estudiante');
    }
}
