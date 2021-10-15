<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre1');
            $table->string('Nombre2');
            $table->string('Apellido1');
            $table->string('Apellido2');
            $table->string('Foto');
            $table->timestamps();

            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');

            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');

            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('tipo_documentos');

            $table->string('document_num');
            $table->foreign('document_num')->references('documento_id')->on('tipo_documentos');

            $table->unsignedBigInteger('departament_id');
            $table->foreign('departament_id')->references('departamento_id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
