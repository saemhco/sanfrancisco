<?php

use Illuminate\Database\Seeder;

class CaracterizacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('caracterizacions')->insert([
       		['activo_id' => '1','amenaza_id' => '8', 'probabilidad' => '3','dimension_D' => '0.4','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '1','amenaza_id' => '18', 'probabilidad' => '3','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0.4','dimension_A' => '0.3','dimension_NR' => '0.2',],
['activo_id' => '1','amenaza_id' => '20', 'probabilidad' => '2','dimension_D' => '0.3','dimension_I' => '0','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0',],

['activo_id' => '2','amenaza_id' => '21', 'probabilidad' => '2','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.4','dimension_NR' => '0.4',],
['activo_id' => '2','amenaza_id' => '24', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0.3','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0.4',],
['activo_id' => '2','amenaza_id' => '25', 'probabilidad' => '3','dimension_D' => '0.3','dimension_I' => '0','dimension_C' => '0.4','dimension_A' => '0.4','dimension_NR' => '0',],
['activo_id' => '2','amenaza_id' => '4', 'probabilidad' => '3','dimension_D' => '0.2','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.3',],

['activo_id' => '3','amenaza_id' => '34', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0.5','dimension_A' => '0.3','dimension_NR' => '0.4',],
['activo_id' => '3','amenaza_id' => '33', 'probabilidad' => '2','dimension_D' => '0.3','dimension_I' => '0.5','dimension_C' => '0.4','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '3','amenaza_id' => '24', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.5','dimension_C' => '0.4','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '3','amenaza_id' => '31', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0.4','dimension_NR' => '0.5',],

['activo_id' => '4','amenaza_id' => '8', 'probabilidad' => '4','dimension_D' => '0.2','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '4','amenaza_id' => '10', 'probabilidad' => '3','dimension_D' => '0.2','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.3','dimension_NR' => '0',],
['activo_id' => '4','amenaza_id' => '25', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.2','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0.2',],

['activo_id' => '5','amenaza_id' => '8', 'probabilidad' => '4','dimension_D' => '0.3','dimension_I' => '0','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '5','amenaza_id' => '18', 'probabilidad' => '2','dimension_D' => '0.2','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '5','amenaza_id' => '22', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '5','amenaza_id' => '34', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0.3','dimension_A' => '0.4','dimension_NR' => '0.4',],
['activo_id' => '5','amenaza_id' => '31', 'probabilidad' => '2','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0.4','dimension_NR' => '0.4',],

['activo_id' => '6','amenaza_id' => '8', 'probabilidad' => '4','dimension_D' => '0.4','dimension_I' => '0.2','dimension_C' => '0.2','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '6','amenaza_id' => '18', 'probabilidad' => '2','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0.3','dimension_NR' => '0.3',],
['activo_id' => '6','amenaza_id' => '22', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.5','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '6','amenaza_id' => '34', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0.4','dimension_A' => '0.3','dimension_NR' => '0.5',],
['activo_id' => '6','amenaza_id' => '31', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],

['activo_id' => '7','amenaza_id' => '18', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.3','dimension_C' => '0.2','dimension_A' => '0.4','dimension_NR' => '0.4',],
['activo_id' => '7','amenaza_id' => '1', 'probabilidad' => '2','dimension_D' => '0.5','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.4',],
['activo_id' => '7','amenaza_id' => '2', 'probabilidad' => '2','dimension_D' => '0.5','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.4',],

['activo_id' => '8','amenaza_id' => '6', 'probabilidad' => '2','dimension_D' => '0.4','dimension_I' => '0','dimension_C' => '0.4','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '8','amenaza_id' => '11', 'probabilidad' => '2','dimension_D' => '0','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0.4','dimension_NR' => '0.3',],
['activo_id' => '8','amenaza_id' => '10', 'probabilidad' => '2','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.2',],

['activo_id' => '9','amenaza_id' => '6', 'probabilidad' => '4','dimension_D' => '0.4','dimension_I' => '0','dimension_C' => '0.4','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '9','amenaza_id' => '7', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0.2','dimension_A' => '0.3','dimension_NR' => '0.3',],
['activo_id' => '9','amenaza_id' => '11', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.3','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],

['activo_id' => '10','amenaza_id' => '7', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '10','amenaza_id' => '11', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.2','dimension_C' => '0.3','dimension_A' => '0.2','dimension_NR' => '0',],
['activo_id' => '10','amenaza_id' => '38', 'probabilidad' => '2','dimension_D' => '0.3','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0.2',],

['activo_id' => '11','amenaza_id' => '7', 'probabilidad' => '5','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '11','amenaza_id' => '11', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.2','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],
['activo_id' => '11','amenaza_id' => '38', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.2',],

['activo_id' => '12','amenaza_id' => '3', 'probabilidad' => '3','dimension_D' => '0.2','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0.2',],
['activo_id' => '12','amenaza_id' => '10', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],
['activo_id' => '12','amenaza_id' => '24', 'probabilidad' => '4','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0',],

['activo_id' => '13','amenaza_id' => '3', 'probabilidad' => '4','dimension_D' => '0.3','dimension_I' => '0.3','dimension_C' => '0.5','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '13','amenaza_id' => '10', 'probabilidad' => '4','dimension_D' => '0.2','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.3',],
['activo_id' => '13','amenaza_id' => '24', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],

['activo_id' => '14','amenaza_id' => '3', 'probabilidad' => '3','dimension_D' => '0.3','dimension_I' => '0.3','dimension_C' => '0.5','dimension_A' => '0','dimension_NR' => '0',],
['activo_id' => '14','amenaza_id' => '10', 'probabilidad' => '3','dimension_D' => '0.2','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.3',],
['activo_id' => '14','amenaza_id' => '35', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],

['activo_id' => '15','amenaza_id' => '6', 'probabilidad' => '4','dimension_D' => '0.7','dimension_I' => '0','dimension_C' => '0.5','dimension_A' => '0.3','dimension_NR' => '0.3',],
['activo_id' => '15','amenaza_id' => '3', 'probabilidad' => '4','dimension_D' => '0.6','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0.3','dimension_NR' => '0',],
['activo_id' => '15','amenaza_id' => '7', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0','dimension_C' => '0.4','dimension_A' => '0','dimension_NR' => '0.4',],
['activo_id' => '15','amenaza_id' => '10', 'probabilidad' => '4','dimension_D' => '0.3','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0.3','dimension_NR' => '0.3',],
['activo_id' => '15','amenaza_id' => '9', 'probabilidad' => '5','dimension_D' => '0.4','dimension_I' => '0.5','dimension_C' => '0.4','dimension_A' => '0.3','dimension_NR' => '0.4',],
['activo_id' => '15','amenaza_id' => '15', 'probabilidad' => '4','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0.4',],

['activo_id' => '16','amenaza_id' => '3', 'probabilidad' => '3','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '16','amenaza_id' => '6', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0.2','dimension_NR' => '0.2',],
['activo_id' => '16','amenaza_id' => '9', 'probabilidad' => '4','dimension_D' => '0.3','dimension_I' => '0','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0.3',],
['activo_id' => '16','amenaza_id' => '10', 'probabilidad' => '3','dimension_D' => '0','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0.5','dimension_NR' => '0.2',],
['activo_id' => '16','amenaza_id' => '17', 'probabilidad' => '4','dimension_D' => '0','dimension_I' => '0.4','dimension_C' => '0.4','dimension_A' => '0.6','dimension_NR' => '0',],
['activo_id' => '16','amenaza_id' => '18', 'probabilidad' => '4','dimension_D' => '0.4','dimension_I' => '0.4','dimension_C' => '0.3','dimension_A' => '0','dimension_NR' => '0',],

['activo_id' => '17','amenaza_id' => '3', 'probabilidad' => '3','dimension_D' => '0.3','dimension_I' => '0','dimension_C' => '0.2','dimension_A' => '0','dimension_NR' => '0.2',],
['activo_id' => '17','amenaza_id' => '6', 'probabilidad' => '3','dimension_D' => '0.2','dimension_I' => '0','dimension_C' => '0.2','dimension_A' => '0.3','dimension_NR' => '0',],
['activo_id' => '17','amenaza_id' => '10', 'probabilidad' => '2','dimension_D' => '0.3','dimension_I' => '0.3','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0',],






             
       ]);
    }
}
