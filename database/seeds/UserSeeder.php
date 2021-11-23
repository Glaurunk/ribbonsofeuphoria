<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sta8is',
            'email' => 'stathis@qwerty.com',
            'password' => Hash::make('@dm1n15tr@t0r'),
        ]);
        DB::table('users')->insert([
            'name' => 'Nick',
            'email' => 'nick@qwerty.com',
            'password' => Hash::make('rockguitar'),
        ]);
    }
}
