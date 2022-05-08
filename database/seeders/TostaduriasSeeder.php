<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TostaduriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('tostadurias')->insert([
            [                
                'nombre'=>'Coffee Tiger Co.',
            ],
            [
                'nombre' => 'Eurocafé',
            ],
            [
                'nombre' => 'Penguin Coffee'
            ],
            [
                'nombre' => 'Capitanes Coffee'
            ]
            ]);
    }
}
