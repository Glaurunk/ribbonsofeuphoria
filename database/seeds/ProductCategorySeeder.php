<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'title' => 'Music',
            'description' => '33 LPs and CDs',
            'image' => null
        ]);
        DB::table('product_categories')->insert([
            'title' => 'Wearables',
            'description' => 'T-Shirts, baseball caps, bags and more!',
            'image' => null
        ]);
        DB::table('product_categories')->insert([
            'title' => 'Memorabilia',
            'description' => 'cups, posters and more!',
            'image' => null
        ]);
    }
}
