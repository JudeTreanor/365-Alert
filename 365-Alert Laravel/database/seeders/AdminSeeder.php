<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Alexandru',
            'lastname' => 'Dari',
            'email' => 'alexandru@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'firstname' => 'Diogo',
            'lastname' => 'Cordas',
            'email' => 'diogo@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'firstname' => 'Elsa',
            'lastname' => 'Ribeiro',
            'email' => 'Elsa@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'firstname' => 'John',
            'lastname' => 'Olivier',
            'email' => 'John@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'firstname' => 'Jude',
            'lastname' => 'Treanor',
            'email' => 'Jude@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
    }
}
