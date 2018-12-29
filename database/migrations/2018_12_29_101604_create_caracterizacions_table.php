<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracterizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracterizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activo_id')->unsigned();
            $table->integer('amenaza_id')->unsigned();
            $table->integer('probabilidad');
            $table->float('dimension_D');
            $table->float('dimension_I');
            $table->float('dimension_C');
            $table->float('dimension_A');
            $table->float('dimension_NR');
            $table->foreign('activo_id')->references('id')->on('activos')->onDelete('cascade');
            $table->foreign('amenaza_id')->references('id')->on('amenazas')->onDelete('cascade');
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
        Schema::dropIfExists('caracterizacions');
    }
}
