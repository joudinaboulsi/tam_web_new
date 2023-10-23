<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_sliders')->delete();
        
        \DB::table('home_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image_slider' => '1698057074slier-1-bg-1.jpg',
                'alt_image' => 'slider1',
                'title_main' => 'Tracking And Monitoring',
                'text_main' => 'Your Eagle Eye in the blind spot.',
                'text_btn'  =>'Discover More',
                'scrollTo' =>'about',
                'created_at' => '2023-10-23 10:31:14',
                'updated_at' => '2023-10-23 10:31:14',
            ),

            1 => 
            array (
                'id' => 2,
                'image_slider' => '1698057126slier-1-bg-2.jpg',
                'alt_image' => 'slider2',
                'title_main' => 'Strategic Technology  Business',
                'text_main' => 'Tech business: Bridging today, shaping tomorrow.',
                'text_btn'  =>'Learn more',
                'scrollTo' =>'about',
                'created_at' => '2023-10-23 10:32:06',
                'updated_at' => '2023-10-23 10:32:06',
            ),
        ));
    }
}
