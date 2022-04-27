<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudades')->insert([
        [
            'cod_postal' => 8000,
            'nombre'=>'Bahía Blanca',
        ],
        [
            'cod_postal' => 7600,
            'nombre' => 'Mar del Plata',
        ],
        [
            'cod_postal' => 9999, //Desconozco
            'nombre' => 'CABA'
        ]
        ]);
    }
}
