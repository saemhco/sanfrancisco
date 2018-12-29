<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['dni' => '00000001', 
             'nombres' => 'Administrador ',
             'apellido_paterno' => 'APaterno', 
             'apellido_materno' => 'Amaterno',
             'email' => '00000001@hotmail.com', 
             'password' => bcrypt('00000001'), 
             'dependencia_id_depende' => 1,
            ],//1

            ['dni' => '00000002', 
             'nombres' => 'Soporte A', 
             'apellido_paterno' => 'APaterno2', 
             'apellido_materno' => 'Amaterno2',
             'email' => '00000002@hotmail.com', 
             'password' => bcrypt('00000002'), 
             'dependencia_id_depende' => 2,
            ],//2
            [
             'dni' => '00000003', 
             'nombres' =>'Usuario A', 
             'apellido_paterno' => 'APaterno3', 
             'apellido_materno' => 'Amaterno3',
             'email' => '00000003@hotmail.com',
             'password' => bcrypt('00000003'), 
             'dependencia_id_depende' => 2,
             ],//3
             [
             'dni' => '00000004', 
             'nombres' =>'Usuario A-1', 
             'apellido_paterno' => 'APaterno4', 
             'apellido_materno' => 'Amaterno4',
             'email' => '00000004@hotmail.com',
             'password' => bcrypt('00000004'), 
             'dependencia_id_depende' => 3,
             ],//4
             [
             'dni' => '00000005', 
             'nombres' =>'Soporte B', 
             'apellido_paterno' => 'APaterno5', 
             'apellido_materno' => 'Amaterno5',
             'email' => '00000005@hotmail.com',
             'password' => bcrypt('00000004'), 
             'dependencia_id_depende' => 4,
             ],//5
             [
             'dni' => '00000006', 
             'nombres' => 'Usuario B', 
             'apellido_paterno' => 'APaterno6', 
             'apellido_materno' => 'Amaterno6',
             'email' => '00000006@hotmail.com',
             'password' => bcrypt('00000006'), 
             'dependencia_id_depende' => 4,
             ],//6
             [
             'dni' => '00000007', 
             'nombres' => 'Usuario B', 
             'apellido_paterno' => 'APaterno7', 
             'apellido_materno' => 'Amaterno7',
             'email' => '00000007@hotmail.com',
             'password' => bcrypt('00000007'), 
             'dependencia_id_depende' => 5,
             ]//7

         ]);     

        //===================================================
        //RolesUsuario Generales
        DB::table('rol_users')->insert([
            ['user_id' => '1', 'rol_id' => '2',], //Administrador General
            ['user_id' => '2', 'rol_id' => '3',], //Soporte área A
            ['user_id' => '3', 'rol_id' => '4',], //Usuario A
            ['user_id' => '4', 'rol_id' => '4',], //Usuario A-1
            ['user_id' => '5', 'rol_id' => '3',], //Soporte área B
            ['user_id' => '6', 'rol_id' => '4',], //Usuario B
            ['user_id' => '7', 'rol_id' => '4',]  //Usuario B-1
        ]);

    }
}
