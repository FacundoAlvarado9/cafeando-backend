<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            [
                'tostaduria_id' => 2,
                'direccion' => 'Bolivar 3102',
                'ciudad_cp' => 7600
            ],
            [
                'tostaduria_id' => 2,
                'direccion' => 'Garay 1428',
                'ciudad_cp' => 7600
            ],
            [
                'tostaduria_id' => 2,
                'direccion' => 'Av. Forest 1499',
                'ciudad_cp' => 9999
            ],
            [
                'tostaduria_id' => 1,
                'direccion' => 'Gorriti 365',
                'ciudad_cp' => 8000
            ],
            [
                'tostaduria_id' => 1,
                'direccion' => 'Sarmiento 550',
                'ciudad_cp' => 8000
            ],
            [
                'tostaduria_id' => 3,
                'direccion' => 'Perón 1410',
                'ciudad_cp' => 9999
            ],
            [
                'tostaduria_id' => 4,
                'direccion' => 'Sarmiento 505',
                'ciudad_cp' => 8000
            ]
        ]);
    }
}
