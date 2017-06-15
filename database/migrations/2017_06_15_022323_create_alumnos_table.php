<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');//Idaluno
            $table->string('email');//Nombre
            $table->char('name', 8);//numero de control
            $table->string('email');//carrera
            $table->string('email');//telefono
            $table->string('email');//correo
            $table->string('email');//direccion
            $table->string('email');//celular
            $table->char('name', 13);//curp
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
