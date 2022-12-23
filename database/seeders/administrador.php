<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class administrador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * * @return void
     */
    public function run()
    {
        //SUPER ADMINISTRADOR
        $super_admin_id = DB::table('users')->insertGetId([
            'name' => 'Super Admin',
            'email' => 'super_admin@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_super_admin_id = DB::table('personas')->insertGetId([
            'user_id' => $super_admin_id,
            'fotografia' => '',
            'nombres' => 'John',
            'apellido_paterno' => 'Doe',
            'apellido_materno' => 'Smith',
            'carnet' => '12345670',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'M',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administradores')->insert([
            'persona_id' => $persona_super_admin_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ADMINISTRADOR
        $admin_id = DB::table('users')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_admin_id = DB::table('personas')->insertGetId([
            'user_id' => $admin_id,
            'fotografia' => '',
            'nombres' => 'James',
            'apellido_paterno' => 'Smith',
            'apellido_materno' => 'Smith',
            'carnet' => '12345671',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'M',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administradores')->insert([
            'persona_id' => $persona_admin_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //DIRECTOR
        $director_id = DB::table('users')->insertGetId([
            'name' => 'Director',
            'email' => 'director@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_director_id = DB::table('personas')->insertGetId([
            'user_id' => $director_id,
            'fotografia' => '',
            'nombres' => 'Luis',
            'apellido_paterno' => 'Vargas',
            'apellido_materno' => '',
            'carnet' => '12345672',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'M',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administradores')->insert([
            'persona_id' => $persona_director_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //SECRETARÍA
        $secretaria_id = DB::table('users')->insertGetId([
            'name' => 'Secretaria',
            'email' => 'secretaria@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_secretaria_id = DB::table('personas')->insertGetId([
            'user_id' => $secretaria_id,
            'fotografia' => '',
            'nombres' => 'Moira',
            'apellido_paterno' => 'Sankut',
            'apellido_materno' => 'Medinaccelli',
            'carnet' => '12345673',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administradores')->insert([
            'persona_id' => $persona_secretaria_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
