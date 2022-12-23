<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class estudiante extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $estudiante_id_1 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 1',
            'email' => 'estudiante_1@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_1 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_1,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Uno',
            'carnet' => '12345601',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_1,
            'tutor_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //ESTUDIANTE 2
        $estudiante_id_2 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 2',
            'email' => 'estudiante_2@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_2 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_2,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Dos',
            'carnet' => '12345602',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_2,
            'tutor_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 3
        $estudiante_id_3 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 3',
            'email' => 'estudiante_3@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_3 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_3,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Tres',
            'carnet' => '12345603',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_3,
            'tutor_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 4
        $estudiante_id_4 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 4',
            'email' => 'estudiante_4@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_4 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_4,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Cuatro',
            'carnet' => '12345604',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_4,
            'tutor_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 5
        $estudiante_id_5 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 5',
            'email' => 'estudiante_5@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_5 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_5,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Cinco',
            'carnet' => '12345605',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_5,
            'tutor_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //ESTUDIANTE 6
        $estudiante_id_6 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 6',
            'email' => 'estudiante_6@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_6 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_6,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Seis',
            'carnet' => '12345606',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_6,
            'tutor_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 7
        $estudiante_id_7 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 7',
            'email' => 'estudiante_7@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_7 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_7,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Siete',
            'carnet' => '12345607',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_7,
            'tutor_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 8
        $estudiante_id_8 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 8',
            'email' => 'estudiante_8@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_8 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_8,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Ocho',
            'carnet' => '12345608',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_8,
            'tutor_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 9
        $estudiante_id_9 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 9',
            'email' => 'estudiante_9@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_9 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_9,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Nueve',
            'carnet' => '12345609',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_9,
            'tutor_id'=>2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ESTUDIANTE 10
        $estudiante_id_10 = DB::table('users')->insertGetId([
            'name' => 'Estudiante 10',
            'email' => 'estudiante_10@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $persona_estudiante_id_10 = DB::table('personas')->insertGetId([
            'user_id' => $estudiante_id_10,
            'fotografia' => '',
            'nombres' => 'Estudiante',
            'apellido_paterno' => 'Nro',
            'apellido_materno' => 'Diez',
            'carnet' => '12345610',
            'fecha_nacimiento' => '2000-01-01',
            'sexo' => 'F',
            'direccion' => '123 Main Street',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estudiantes')->insert([
            'persona_id' => $persona_estudiante_id_10,
            'tutor_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
