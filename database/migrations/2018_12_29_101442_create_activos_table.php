<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n');
            $table->string('codigo');
            $table->integer('capa_id')->unsigned();
            $table->string('nombre');
            $table->integer('unidad')->default(0);
            $table->float('costo_unitario')->default(0);
            $table->integer('dimension_D');
            $table->integer('dimension_I');
            $table->integer('dimension_C');
            $table->integer('dimension_A');
            $table->integer('dimension_NR');

            $table->foreign('capa_id')->references('id')->on('capas')->onDelete('cascade');
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
        Schema::dropIfExists('activos');
    }
}
