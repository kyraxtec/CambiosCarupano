<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDomicilios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Domicilios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('pais')->nullable();
            $table->foreign('pais')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ciudad', 50)->nullable();
            $table->string('codigo_postal', 5)->nullable();
            $table->string('direccion', 100)->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Domicilios');
    }
}
