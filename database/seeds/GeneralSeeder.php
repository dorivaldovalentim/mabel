<?php

use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'acaciavalentim',
            'first_name' => 'Acácia',
            'last_name' => 'Valentim',
            'email' => 'acaciavalentim@gmail.com',
            'phone' => '990802891',
            'password' => Hash::make('qwerty'),
            'is_admin' => 0
        ]);

        DB::table('users')->insert([
            'username' => 'dorivaldovalentim',
            'first_name' => 'Dorivaldo',
            'last_name' => 'Valentim',
            'email' => 'dorivaldovalentim@gmail.com',
            'phone' => '933802891',
            'password' => Hash::make('qwerty'),
            'is_admin' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'jefthvalentim',
            'first_name' => 'Jefth',
            'last_name' => 'Valentim',
            'email' => 'jefthvalentim@hotmail.com',
            'phone' => '939796801',
            'password' => Hash::make('qwerty'),
            'is_admin' => 2
        ]);
    }
}
