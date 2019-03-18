<?php

use Illuminate\Database\Seeder;

class AdminBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'title' => 'LG',
            'status' => '2',
            'c_image' => '/storage/photos/1/iphone2.jpg',
            'pictures' => '/storage/photos/1/Cleartones_Organici_Phone.jpg'
        ]);
        DB::table('brands')->insert([
            'title' => 'ADIDAS',
            'status' => '3',
            'c_image' => '/storage/photos/1/iphone2.jpg',
            'pictures' => '/storage/photos/1/Cleartones_Organici_Phone.jpg'
        ]);

        DB::table('brands')->insert([
            'title' => 'DELL',
            'status' => '5',
            'c_image' => '/storage/photos/1/iphone2.jpg',
            'pictures' => '/storage/photos/1/Cleartones_Organici_Phone.jpg'
        ]);
        DB::table('brands')->insert([
            'title' => 'SAMSUNG',
            'status' => '6',
            'c_image' => '/storage/photos/1/iphone2.jpg',
            'pictures' => '/storage/photos/1/Cleartones_Organici_Phone.jpg'
        ]);
    }
}
