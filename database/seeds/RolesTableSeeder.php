<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            ['rol' => 'ZenoSama', 'descripcion' => 'Super Admin',],//1
            ['rol' => 'Administrador General','descripcion' => 'Administrador General: Gestiona Usuarios',],//2
            ['rol' => 'Soporte', 'descripcion' => 'Soporte Técnico',],//3
            ['rol' => 'Usuario', 'descripcion' => 'Usuario Escritorio: ',],//4
                        
        ]);
    }
}
