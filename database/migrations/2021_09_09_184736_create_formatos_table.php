<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formatos', function (Blueprint $table) {
            $table->id();
            $table->integer('alumno_id');
            $table->string('tipo_baja');
            $table->string('momento_baja');
            $table->string('modalidad');
            $table->string('status_academico');
            $table->string('ultima_beca');
            $table->string('avance_academico');
            $table->string('motivo_baja');
            $table->string('especifica_baja');
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
        Schema::dropIfExists('formatos');
    }
}
