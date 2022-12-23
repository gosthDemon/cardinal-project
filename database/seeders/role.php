<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        DB::table('roles')->insert([
            ['role' => 'super_administrador', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'administrador', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'director', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'secretaria', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'docente', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'tutor', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'estudiante', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
