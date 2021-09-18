<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Se llama el seeder generado para cuando se implemente el seeder principal de igual manera se implemente el seeder generado.
        $this->call(EmployeeSeeder::class);
    }
}
