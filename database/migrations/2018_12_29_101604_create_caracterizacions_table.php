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
            $table->float('dimencion_D');
            $table->float('dimencion_I');
            $table->float('dimencion_C');
            $table->float('dimencion_A');
            $table->float('dimencion_NR');
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
