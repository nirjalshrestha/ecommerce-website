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
            'title' => 'White Shoe',
            'description' => Str::random(10),
            'detail' => Str::random(10),
            'status' => '5',
            'cover_image' => '/storage/photos/1/product image/l-product-2.jpg',
            'price' => '2000',
            'quantity' => '6',
        ]);
        DB::table('products')->insert(
            ['title' => 'Black Cloth',
                'description' => Str::random(10),
                'detail' => Str::random(10),
                'status' => '4',
                'cover_image' => '/storage/photos/1/product image/l-product-2.jpg',
                'price' => '1000',
                'quantity' => '5',
            ]);
        DB::table('products')->insert(
            ['title' => 'Green Bag',
                'description' => Str::random(10),
                'detail' => Str::random(10),
                'status' => '4',
                'cover_image' => '/storage/photos/1/product image/l-product-2.jpg',
                'price' => '2000',
                'quantity' => '5',
            ]);
        DB::table('products')->insert(
            ['title' => 'Blue Bag',
                'description' => Str::random(10),
                'detail' => Str::random(10),
                'status' => '4',
                'cover_image' => '/storage/photos/1/product image/l-product-2.jpg',
                'price' => '2000',
                'quantity' => '5',
            ]);
        DB::table('products')->insert(
            ['title' => 'Jama',
                'description' => Str::random(10),
                'detail' => Str::random(10),
                'status' => '4',
                'cover_image' => '/storage/photos/1/product image/l-product-2.jpg',
                'price' => '2000',
                'quantity' => '5',
            ]);


    }
}
