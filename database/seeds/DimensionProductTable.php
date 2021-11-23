<?php

use Illuminate\Database\Seeder;

class DimensionProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimension_product')->insert([
            'dimension_id' => 1,
            'product_id' => 4
        ]);
        DB::table('dimension_product')->insert([
            'dimension_id' => 2,
            'product_id' => 4
        ]);
        DB::table('dimension_product')->insert([
            'dimension_id' => 3,
            'product_id' => 4
        ]);
    }
}
