<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariedadesOrigenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variedad_origen')->insert([
            //Topazio -> Brasil
            [
                'variedad_id' => 1,
                'origen_id' => 1
            ],
            //Blend Moka -> Brasil y Colombia
            [
                'variedad_id' => 2,
                'origen_id' => 1
            ],
            [
                'variedad_id' => 2,
                'origen_id' => 2
            ],
            //Blend espresso -> Brasil y Colombia
            [
                'variedad_id' => 3,
                'origen_id' => 1
            ],
            [
                'variedad_id' => 3,
                'origen_id' => 2
            ],
            //Papua -> Papua
            [
                'variedad_id' => 4,
                'origen_id' => 3
            ],
            //Kenya Post Fermentado -> Kenya
            [
                'variedad_id' => 5,
                'origen_id' => 4
            ],
            //Sudestada Blend -> Brasil y Colombia
            [
                'variedad_id' => 6,
                'origen_id' => 1
            ],
            [
                'variedad_id' => 6,
                'origen_id' => 2
            ],
            //Mexico Veracruz -> Mexico
            [
                'variedad_id' => 7,
                'origen_id' => 5
            ],
            //Strong Coffee Blend -> Brasil
            [
                'variedad_id' => 8,
                'origen_id' => 1
            ],
            //Amore Rosso -> Brasil y Vietnam
            [
                'variedad_id' => 9,
                'origen_id' => 1
            ],
            [
                'variedad_id' => 9,
                'origen_id' => 6
            ],
        ]);
    }
}
