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
        $people_estudiante_id_1 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_1,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Uno',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_1,
            'tutor_id'=>1,
            'license' => '12345601',
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
        $people_estudiante_id_2 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_2,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Dos',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_2,
            'tutor_id'=>2,
            'license' => '12345602',
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
        $people_estudiante_id_3 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_3,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Tres',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_3,
            'tutor_id'=>1,
            'license' => '12345603',
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
        $people_estudiante_id_4 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_4,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Cuatro',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_4,
            'tutor_id'=>2,
            'license' => '12345604',
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
        $people_estudiante_id_5 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_5,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Cinco',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_5,
            'tutor_id'=>1,
            'license' => '12345605',
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
        $people_estudiante_id_6 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_6,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Seis',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_6,
            'tutor_id'=>2,
            'license' => '12345606',
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
        $people_estudiante_id_7 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_7,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Siete',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_7,
            'tutor_id'=>2,
            'license' => '12345607',
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
        $people_estudiante_id_8 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_8,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Ocho',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_8,
            'tutor_id'=>1,
            'license' => '12345608',
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
        $people_estudiante_id_9 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_9,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Nueve',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_9,
            'tutor_id'=>2,
            'license' => '12345609',
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
        $people_estudiante_id_10 = DB::table('peoples')->insertGetId([
            'user_id' => $estudiante_id_10,
            'picture_profile' => '',
            'names' => 'Estudiante',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Diez',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('students')->insert([
            'people_id' => $people_estudiante_id_10,
            'tutor_id' => 3,
            'license' => '12345610',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
