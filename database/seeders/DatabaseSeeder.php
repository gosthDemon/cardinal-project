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
        $this->call(role::class);
        $this->call(administrador::class);
        $this->call(docente::class);
        $this->call(tutor::class);
    }
}
