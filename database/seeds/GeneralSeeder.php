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
            'name' => 'Acácia Valentim',
            'email' => 'acaciavalentim@gmail.com',
            'password' => Hash::make('qwerty')
        ]);
    }
}
