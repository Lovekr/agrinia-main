<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [[
            'name' => 'Indian Tomato',
            'category' => 'Tomato',
            'price' => 300,
            'offer_price' => 300,
            'ratings' => '4',
            'images' => '1.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Beet',
            'category' => 'Beet',
            'price' => 100,
            'offer_price' => 50,
            'ratings' => '4',
            'images' => '8.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Orange',
            'category' => 'Fruits',
            'price' => 400,
            'offer_price' => 30,
            'ratings' => '5',
            'images' => '2.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Apple',
            'category' => 'Fruits',
            'price' => 200,
            'offer_price' => 150,
            'ratings' => '5',
            'images' => '3.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Orange box',
            'category' => 'Fruits',
            'price' => 300,
            'offer_price' => 150,
            'ratings' => '5',
            'images' => '5.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Braucli',
            'category' => 'Vegitables',
            'price' => 500,
            'offer_price' => 550,
            'ratings' => '5',
            'images' => '7.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Red chille',
            'category' => 'Vegitables',
            'price' => 300,
            'offer_price' => 250,
            'ratings' => '5',
            'images' => '6.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Banana',
            'category' => 'Fruits',
            'price' => 100,
            'offer_price' => 80,
            'ratings' => '5',
            'images' => '4.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Indian Tomato',
            'category' => 'Tomato',
            'price' => 300,
            'offer_price' => 300,
            'ratings' => '4',
            'images' => '1.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Beet',
            'category' => 'Beet',
            'price' => 100,
            'offer_price' => 50,
            'ratings' => '4',
            'images' => '8.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Orange',
            'category' => 'Fruits',
            'price' => 400,
            'offer_price' => 30,
            'ratings' => '5',
            'images' => '2.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Apple',
            'category' => 'Fruits',
            'price' => 200,
            'offer_price' => 150,
            'ratings' => '5',
            'images' => '3.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Orange box',
            'category' => 'Fruits',
            'price' => 300,
            'offer_price' => 150,
            'ratings' => '5',
            'images' => '5.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Braucli',
            'category' => 'Vegitables',
            'price' => 500,
            'offer_price' => 550,
            'ratings' => '5',
            'images' => '7.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Red chille',
            'category' => 'Vegitables',
            'price' => 300,
            'offer_price' => 250,
            'ratings' => '5',
            'images' => '6.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ],
        [
            'name' => 'Banana',
            'category' => 'Fruits',
            'price' => 100,
            'offer_price' => 80,
            'ratings' => '5',
            'images' => '4.png',
            'product_quantity' => 20,
            'product_details' => '',
            'product_tags' => '',
            'product_description'=> '',
            'addtional_information'=>''
        ]
        ];

        DB::table('products')->delete();

        DB::table('products')->insert($products);
    }
}
