<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTasas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('pais');
            $table->foreign('pais')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('moneda');
            $table->foreign('moneda')->references('id')->on('monedas')->onDelete('cascade')->onUpdate('cascade');
            $table->float('tasa', 255,5)->nullable();
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
        Schema::dropIfExists('tasas');
    }
}
