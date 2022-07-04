<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
            'name' => 'admin02',
            'password' => Hash::make('abc12345'),
            'email' => 'ejemplo2@ejemplo.com'
          ],
          [
            'name' => 'facundo',
            'password' => Hash::make('12345678'),
            'email' => 'facundoalvarado9@gmail.com'
          ]
        ]);
    }
}
