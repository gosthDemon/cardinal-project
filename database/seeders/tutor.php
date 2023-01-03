<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class tutor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TUTOR 1
        $tutor_id = DB::table('users')->insertGetId([
            'name' => 'Tutor 1',
            'email' => 'tutor_1@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_tutor_id = DB::table('personas')->insertGetId([
            'user_id' => $tutor_id,
            'fotografia' => '',
            'nombres' => 'Tutor',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Uno',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'M',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutores')->insert([
            'persona_id' => $persona_tutor_id,
            'carnet' => '12345677',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //TUTOR 2
        $tutor_id_2 = DB::table('users')->insertGetId([
            'name' => 'Tutor 2',
            'email' => 'tutor_2@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_tutor_id_2 = DB::table('personas')->insertGetId([
            'user_id' => $tutor_id_2,
            'fotografia' => '',
            'nombres' => 'Tutor',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Dos',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutores')->insert([
            'persona_id' => $persona_tutor_id_2,
            'carnet' => '12345678',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //TUTOR 2
        $tutor_id_3 = DB::table('users')->insertGetId([
            'name' => 'Tutor 3',
            'email' => 'tutor_3@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_tutor_id_3 = DB::table('personas')->insertGetId([
            'user_id' => $tutor_id_3,
            'fotografia' => '',
            'nombres' => 'Tutor',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Tres',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutores')->insert([
            'persona_id' => $persona_tutor_id_3,
            'carnet' => '12345679',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
