<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrigenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('origenes')->insert([
            [
                'id' => 1,
                'nombre'=>'Brasil',
                'descripcion' => 'Grandes cafeteros los brasileños'
            ],
            [
                'id' => 2,
                'nombre'=>'Colombia',
                'descripcion' => 'De las tierras de Shakira'
            ],
            [
                'id' => 3,
                'nombre'=>'Papua Nueva Guinea',               
                'descripcion' => 'Del interesante país oceánico'
            ],
            [
                'id' => 4,
                'nombre'=>'Kenya',               
                'descripcion' => 'Africa produce mucho café'
            ],        
            [
                'id' => 5,
                'nombre'=>'México',               
                'descripcion' => 'Mariachis y una taza de café'
            ],
            [
                'id' => 6,
                'nombre'=>'Vietnam',               
                'descripcion' => '*suena Fortunate Son de Creedence de fondo*'
            ],
            
        ]);
    }
}
