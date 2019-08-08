<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('rol');
            $table->foreign('rol')->references('id')->on('roles');
            $table->unsignedBigInteger('pais');
            $table->foreign('pais')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('usuarios');
    }
}
