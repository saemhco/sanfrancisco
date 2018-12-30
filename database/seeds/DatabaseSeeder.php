<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RolesTableSeeder::class);
        $this->call(DependenciasTableSeeder::class);       
        $this->call(UsersTableSeeder::class);
        $this->call(CapasTableSeeder::class);
        $this->call(ActivosTableSeeder::class);
        $this->call(AmenazasTableSeeder::class);
        $this->call(CaracterizacionTableSeeder::class);       
    }
}