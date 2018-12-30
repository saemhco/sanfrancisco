<?php

use Illuminate\Database\Seeder;

class CapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capas')->insert([
                ['capa' => 'DATOS (Date) ', 'descripcion' => '','categoria' => 'ACTIVOS ESENCIALES [essential]',],
				['capa' => 'INFORMACION (Info) ', 'descripcion' => '','categoria' => 'ACTIVOS ESENCIALES [essential]',],
				['capa' => 'SERVICIO [service] ', 'descripcion' => '','categoria' => 'ACTIVOS ESENCIALES [essential]',],

				['capa' => 'SOFTWARE [SW] ', 'descripcion' => '','categoria' => 'APLICACIONES INFORMÁTICAS',],
				['capa' => 'HARDWARE [SW] ', 'descripcion' => '','categoria' => 'EQUIPOS INFORMÁTICOS',],
				['capa' => 'REDES DE COMUNICACIÓN [COM] ', 'descripcion' => '','categoria' => 'COMUNICACIONES',],
				['capa' => 'SOPORTE [MEDIA] ', 'descripcion' => '','categoria' => 'SOPORTES DE INFORMACIÓN',],
				['capa' => 'EQUIPAMIENTO [AUX] ', 'descripcion' => '','categoria' => 'EQUIPAMIENTO AUXILIAR',],
				['capa' => 'INSTALACIONES [L] ', 'descripcion' => '','categoria' => 'INSTALACIONES',],
				['capa' => 'PERSONAL [PER] ', 'descripcion' => '','categoria' => 'PERSONAL',]
      
       ]);
    }
}
