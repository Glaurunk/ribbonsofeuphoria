<?php

use Illuminate\Database\Seeder;

class ProductSizeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 1
        ]);
        DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 2
        ]);
        DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 3
        ]);
        DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 4
        ]);
        DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 5
        ]);
    }
}
