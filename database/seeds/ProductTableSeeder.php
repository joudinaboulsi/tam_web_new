<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1698051060gurtam-logo.jpg',
                'alt_image'=>'gurtam-logo',
                'created_at' => '2023-10-23 08:51:00',
                'updated_at' =>'2023-10-23 08:51:00',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1698051072honeywell-logo.jpg',
                'alt_image'=>'honeywell-logo',
                'created_at' => '2023-10-23 08:51:00',
                'updated_at' =>'2023-10-23 08:51:00',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1698051084scort-logo.png',
                'alt_image'=>'scort-logo',
                'created_at' => '2023-10-23 08:51:00',
                'updated_at' =>'2023-10-23 08:51:00',
            ),
            3=> 
            array (
                'id' => 4,
                'image' => '1698051096technoton-logo.png',
                'alt_image'=>'technoton-logo',
                'created_at' => '2023-10-23 08:51:00',
                'updated_at' =>'2023-10-23 08:51:00',
            ),

            4=> 
            array (
                'id' => 5,
                'image' => '1698051110teltonika-logo.png',
                'alt_image'=>'teltonika-logo',
                'created_at' => '2023-10-23 08:51:00',
                'updated_at' =>'2023-10-23 08:51:00',
            ),

            5=> 
            array (
                'id' => 6,
                'image' => '1698051181wialon-logo.png',
                'alt_image'=>'wialon-logo',
                'created_at' => '2023-10-23 08:51:00',
                'updated_at' =>'2023-10-23 08:51:00',
            ),
        ));
    }
}
