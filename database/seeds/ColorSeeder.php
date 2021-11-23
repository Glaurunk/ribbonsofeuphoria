<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'color' => 'red'
        ]);
        DB::table('colors')->insert([
            'color' => 'cyan'
        ]);
        DB::table('colors')->insert([
            'color' => 'white'
        ]);
        DB::table('colors')->insert([
            'color' => 'purple'
        ]);
        DB::table('colors')->insert([
            'color' => 'black'
        ]);
    }
}
