<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class docente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DOCENTE 1
        $docente_id = DB::table('users')->insertGetId([
            'name' => 'Docente 1',
            'email' => 'docente_1@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_docente_id = DB::table('personas')->insertGetId([
            'user_id' => $docente_id,
            'fotografia' => '',
            'nombres' => 'Darlin Belen',
            'apellido_paterno' => 'Ruiz',
            'apellido_materno' => 'Valdez',
            'fecha_nacimiento' => '2006-05-16',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('docentes')->insert([
            'persona_id' => $persona_docente_id,
            'carnet' => '12345675',
            'especialidad' => 'Lic. en Artes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //DOCENTE 2
        $docente_id = DB::table('users')->insertGetId([
            'name' => 'Docente 2',
            'email' => 'docente_2@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_docente_id = DB::table('personas')->insertGetId([
            'user_id' => $docente_id,
            'fotografia' => '',
            'nombres' => 'Isaac Alberth',
            'apellido_paterno' => 'Newnstein',
            'apellido_materno' => '',
            'fecha_nacimiento' => '1999-03-20',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('docentes')->insert([
            'persona_id' => $persona_docente_id,
            'carnet' => '12345676',
            'especialidad' => 'Lic. en Física',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
