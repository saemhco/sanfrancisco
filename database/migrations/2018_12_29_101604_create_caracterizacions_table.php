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
            $table->integer('probabilidad')->default(0)->nullable();
            $table->float('dimension_D')->default(0)->nullable();
            $table->float('dimension_I')->default(0)->nullable();
            $table->float('dimension_C')->default(0)->nullable();
            $table->float('dimension_A')->default(0)->nullable();
            $table->float('dimension_NR')->default(0)->nullable();
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
