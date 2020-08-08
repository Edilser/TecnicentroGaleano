<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEmpresa');
            $table->integer('dpi');
            $table->integer('primerNombre');
            $table->integer('segundoNombre');
            $table->integer('tercerNombre')->nullable();
            $table->integer('primerApellido');
            $table->integer('segundoApellido');
            $table->integer('apellidoCasado')->nullable();
            $table->date('fechaNacimiento');

            $table->foreign('idEmpresa')->references('id')->on('empresa');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
