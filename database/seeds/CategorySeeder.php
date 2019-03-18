<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title'=>'Phone',
            'position'=>'2',
            'status'=>'1',
            'c_image'=>'/storage/photos/1/iphone.jpg',
            'pictures'=>'/storage/photos/1/iphone2.jpg',
        ]);

        DB::table('categories')->insert([
            'title'=>'Bags',
            'position'=>'3',
            'status'=>'2',
            'c_image'=>'/storage/photos/1/iphone.jpg',
            'pictures'=>'/storage/photos/1/iphone2.jpg',
        ]);

        DB::table('categories')->insert([
            'title'=>'Clothes',
            'position'=>'4',
            'status'=>'4',
            'c_image'=>'/storage/photos/1/iphone.jpg',
            'pictures'=>'/storage/photos/1/iphone2.jpg',
        ]);

        DB::table('categories')->insert([
            'title'=>'Shoes',
            'position'=>'2',
            'status'=>'1',
            'c_image'=>'/storage/photos/1/iphone.jpg',
            'pictures'=>'/storage/photos/1/iphone2.jpg',
        ]);
    }
}
