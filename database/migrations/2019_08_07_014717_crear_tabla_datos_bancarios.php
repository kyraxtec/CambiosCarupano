<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatosBancarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_bancarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('banco');
            $table->foreign('banco')->references('id')->on('bancos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titular', 50);
            $table->string('tipodoc', 2);
            $table->string('numerodoc', 50);
            $table->string('cuenta', 20)->unique();
            $table->string('tcuenta', 10);
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
        Schema::dropIfExists('datos_bancarios');
    }
}
