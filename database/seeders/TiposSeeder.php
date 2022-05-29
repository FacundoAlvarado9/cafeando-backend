<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            [
                //'id'=>1,
                'nombre'=>'De Origen'
            ],
            [
                //'id'=>2,
                'nombre'=>'Blend'
            ]
        ]);
    }
}
