<?php

use Illuminate\Database\Seeder;

class DependenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dependencias
        DB::table('dependencias')->insert([
                ['nombre' => 'Local Principal','es_area' => '1','es_subarea' => '0','dependencia_id' => '','obs' => '',], //1
                ['nombre' => 'Area A','es_area' => '1','es_subarea' => '0','dependencia_id' => '1','obs' => '',],//2
                ['nombre' => 'Sub Area A-1','es_area' => '0','es_subarea' => '1','dependencia_id' => '2','obs' => 'xyz',],//3
                ['nombre' => 'Area B','es_area' => '1','es_subarea' => '0','dependencia_id' => '1','obs' => '',],//4
                ['nombre' => 'Sub Area B-1','es_area' => '0','es_subarea' => '1','dependencia_id' => '4','obs' => 'xyz',]//5
      
       ]);
    }
}
