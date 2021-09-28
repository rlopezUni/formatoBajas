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
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('fecha');
            $table->string('correo');
            $table->string('id_pwc');
            $table->string('telefono_celular')->nullable();
            $table->string('periodo_actual');
            $table->string('curriculum');
            $table->string('telefono_particular')->nullable();
            $table->string('ultimo_grado');
            $table->string('programa_grado_actual');
            $table->string('telefono_alternativo')->nullable();
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
