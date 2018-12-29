<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('f_nac')->nullable();
            $table->string('email',30)->unique()->nullable();
            $table->string('dni',8)->unique();
            $table->string('password')->nullable();
            $table->string('foto')->default('user.png');
            //Domicilio
            $table->integer('distrito_nac')->default('090101')->unsigned(); //Ubigeo
            $table->string('domicilio')->nullable();
            $table->string('n_domicilio')->nullable();
            //Contacto
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            //Otros
            $table->string('tipo_sangre')->nullable();
            $table->integer('sexo')->default('1');
            $table->integer('dependencia_id_depende')->nullable();
           
            $table->string('estado_login')->default('0');
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
