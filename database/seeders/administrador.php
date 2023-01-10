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
        $people_super_admin_id = DB::table('peoples')->insertGetId([
            'user_id' => $super_admin_id,
            'picture_profile' => '',
            'names' => 'John',
            'paternal_lastname' => 'Doe',
            'maternal_lastname' => 'Smith',
            'birthday' => '2000-01-01',
            'sex' => 'M',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administrators')->insert([
            'people_id' => $people_super_admin_id,
            'rda' => '12345670',
            'license' => '12345670',
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
        $people_admin_id = DB::table('peoples')->insertGetId([
            'user_id' => $admin_id,
            'picture_profile' => '',
            'names' => 'James',
            'paternal_lastname' => 'Smith',
            'maternal_lastname' => 'Smith',
            'birthday' => '2000-01-01',
            'sex' => 'M',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administrators')->insert([
            'people_id' => $people_admin_id,
            'rda'=>'12345671',
            'license' => '12345671',
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
        $people_director_id = DB::table('peoples')->insertGetId([
            'user_id' => $director_id,
            'picture_profile' => '',
            'names' => 'Luis',
            'paternal_lastname' => 'Vargas',
            'maternal_lastname' => '',
            'birthday' => '2000-01-01',
            'sex' => 'M',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administrators')->insert([
            'people_id' => $people_director_id,
            'rda' => '12345672',
            'license' => '12345672',
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
        $people_secretaria_id = DB::table('peoples')->insertGetId([
            'user_id' => $secretaria_id,
            'picture_profile' => '',
            'names' => 'Moira',
            'paternal_lastname' => 'Sankut',
            'maternal_lastname' => 'Medinaccelli',
            'birthday' => '2000-01-01',
            'sex' => 'F',
            'direction' => '123 Main Street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('administrators')->insert([
            'people_id' => $people_secretaria_id,
            'rda' => '12345673',
            'license' => '12345673',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
