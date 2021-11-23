<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Ribbons of Euphoria',
            'description' => 'LP Vinyl Record Limited Edition',
            'categoryId' => 1,
            'price' => 12.99,
            'images' => '["/images/alboum1.jpg"]',
            'new_price' => null,
            'availability' => 'available',
            'featured' => false,
            'status' => 1,
            'other' => null,
            'misc' => null,
        ]);

        DB::table('products')->insert([
            'title' => 'Reaching for the skies',
            'description' => 'EP Vinyl Record Picture Disc, 165gr. Collectors edition. Printed in 300 copies',
            'categoryId' => 1,
            'price' => 15.99,
            'images' => '["/images/alboum2.jpg"]',
            'new_price' => null,
            'availability' => 'available',
            'featured' => false,
            'status' => 1,
            'other' => null,
            'misc' => null,
        ]);

        DB::table('products')->insert([
            'title' => 'ROE Red T-Shirt',
            'description' => 'Summer T-Shirt with the ROW logo stamp',
            'categoryId' => 2,
            'price' => 19.49,
            'images' => '["/images/tshirt1.jpg","/images/tshirt1.jpg","/images/tshirt3.jpg"]',
            'new_price' => null,
            'availability' => 'available',
            'featured' => false,
            'status' => 1,
            'other' => null,
            'misc' => null,
        ]);
        DB::table('products')->insert([
            'title' => 'ROE Behold the Incidence of Truth Poster',
            'description' => 'An illustrated print of ROE\'s first alboum',
            'categoryId' => 1,
            'price' => 9.49,
            'images' => '["/images/poster.png"]',
            'new_price' => null,
            'availability' => 'available',
            'featured' => false,
            'status' => 1,
            'other' => null,
            'misc' => null,
        ]);
    }
}