<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(TostaduriasSeeder::class);
        $this->call(SucursalesSeeder::class);
        $this->call(TiposSeeder::class);
        $this->call(VariedadesSeeder::class);
        $this->call(OrigenesSeeder::class);
        $this->call(VariedadesOrigenesSeeder::class);
    }
}
