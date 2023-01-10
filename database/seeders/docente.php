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
        //teacher 1
        $teacher_id = DB::table('users')->insertGetId([
            'name' => 'teacher 1',
            'email' => 'teacher_1@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $people_teacher_id = DB::table('peoples')->insertGetId([
            'user_id' => $teacher_id,
            'picture_profile' => '',
            'names' => 'Darlin Belen',
            'paternal_lastname' => 'Ruiz',
            'maternal_lastname' => 'Valdez',
            'birthday' => '2006-05-16',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teachers')->insert([
            'people_id' => $people_teacher_id,
            'license' => '12345675',
            'specialty' => 'Lic. en Artes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //teacher 2
        $teacher_id = DB::table('users')->insertGetId([
            'name' => 'teacher 2',
            'email' => 'teacher_2@cardinal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'role_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $people_teacher_id = DB::table('peoples')->insertGetId([
            'user_id' => $teacher_id,
            'picture_profile' => '',
            'names' => 'Isaac Alberth',
            'paternal_lastname' => 'Newnstein',
            'maternal_lastname' => '',
            'birthday' => '1999-03-20',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teachers')->insert([
            'people_id' => $people_teacher_id,
            'license' => '12345676',
            'specialty' => 'Lic. en Física',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
