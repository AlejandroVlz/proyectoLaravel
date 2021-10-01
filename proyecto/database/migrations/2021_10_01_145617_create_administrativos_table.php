<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrativos', function (Blueprint $table) {
	    $table->id();
	    $table->string('nombre');
	    $table->string('apellido_pat');
	    $table->string('apellido_mat');
	    $table->integer('numero_celular');
	    $table->unsignedBigInteger('id_cuenta');
	    $table->foreign('id_cuenta')->references('id')->on('cuenta');
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
        Schema::dropIfExists('administrativos');
    }
}
