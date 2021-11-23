<?php

use Illuminate\Database\Seeder;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimensions')->insert([
            'title' => 'small',
            'description' => '17X24'
        ]);
        DB::table('dimensions')->insert([
            'title' => 'medium',
            'description' => '50X70'
        ]);
        DB::table('dimensions')->insert([
            'title' => 'small',
            'description' => '70X100'
        ]);
    }
}
