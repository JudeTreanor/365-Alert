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
            'username' => 'Alexandru',
            'email' => 'alexandru@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'Diogo',
            'email' => 'diogo@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'Elsa',
            'email' => 'Elsa@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'John',
            'email' => 'John@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'Jude',
            'email' => 'Jude@gmail.com',
            'contact' => '123456789',
            'password' => '12345678',
            'admin' => '1',
        ]);
    }
}
