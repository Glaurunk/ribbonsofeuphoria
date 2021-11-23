<?php

use Illuminate\Database\Seeder;

class OrderTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'invoice' => '#A1234',
            'comments' => 'this is a test order',
            'name' => 'Normal Man',
            'email' => 'normalman@qwerty.com',
            'address' => 'Solonos 60, Athens 10680, Greece',
            'phone' => '6972121212',
            'post' => 'normal',
            'placed_on' => '2021-11-21',
            'email_confirmed' => false,
            'status' => 'pending',
            'sent_on' => null,
            'archived' => false
        ]);

        DB::table('orders')->insert([
            'invoice' => '#A1235',
            'comments' => 'this is another test order',
            'name' => 'Normal Man',
            'email' => 'normalman@qwerty.com',
            'address' => 'Solonos 60, Athens 10680, Greece',
            'phone' => '6972121212',
            'post' => 'normal',
            'placed_on' => '2021-11-22',
            'email_confirmed' => false,
            'status' => 'pending',
            'sent_on' => null,
            'archived' => false
        ]);
    }
}
