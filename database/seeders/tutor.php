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
        $people_tutor_id = DB::table('peoples')->insertGetId([
            'user_id' => $tutor_id,
            'picture_profile' => '',
            'names' => 'Tutor',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Uno',
            'birthday' => '2000-01-01',
            'sex' => 'M',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutors')->insert([
            'people_id' => $people_tutor_id,
            'license' => '12345677',
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
        $people_tutor_id_2 = DB::table('peoples')->insertGetId([
            'user_id' => $tutor_id_2,
            'picture_profile' => '',
            'names' => 'Tutor',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Dos',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutors')->insert([
            'people_id' => $people_tutor_id_2,
            'license' => '12345678',
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
        $people_tutor_id_3 = DB::table('peoples')->insertGetId([
            'user_id' => $tutor_id_3,
            'picture_profile' => '',
            'names' => 'Tutor',
            'paternal_lastname' => 'Nro',
            'maternal_lastname' => 'Tres',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutors')->insert([
            'people_id' => $people_tutor_id_3,
            'license' => '12345679',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
