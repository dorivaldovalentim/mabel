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
            'phone' => '933802891',
            'password' => Hash::make('qwerty'),
            'is_admin' => 0
        ]);
    }
}
