<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatosPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
             $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre',20)->nullable();
            $table->string('apellido',20)->nullable();
            $table->string('iddoctype', 2)->nullable();
            $table->string('iddocnum', 20)->unique()->nullable();
            $table->charset ='utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
