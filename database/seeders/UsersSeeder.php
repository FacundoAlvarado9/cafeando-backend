<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Test01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin01',
            'password' => Hash::make('abc1234'),
            'email' => 'ejemplo@ejemplo.com',
        ],
        [
            'name' => 'admin02',
            'password' => Hash::make('abc1234'),
            'email' => 'ejemplo2@ejemplo.com',
        ]);
    }
}
