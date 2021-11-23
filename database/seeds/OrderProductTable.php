<?php

use Illuminate\Database\Seeder;

class OrderProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id' => 1
        ]);
        DB::table('order_product')->insert([
            'order_id' => 2,
            'product_id' => 2
        ]);
        DB::table('order_product')->insert([
            'order_id' => 2,
            'product_id' => 3
        ]);
        DB::table('order_product')->insert([
            'order_id' => 2,
            'product_id' => 4
        ]);
    }
}
