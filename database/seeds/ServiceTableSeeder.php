<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subtitle' => 'our services',
                'title' => 'Technology is important for your Business development',
                'text' => '<p>&nbsp;Technology became an important part of a well developed and organized company. We customize technology for our clients to be enjoyable and helpful in reaching their targets and fulfilling their goals.</p>',
                'image1' => '1698050400iot-and-telematics-solutions.jpg',
                'alt_image1' => 'iot-and-telematics-solutions',
                'icon1' => '1698050401iot-and-telematics-solutions.png',
                'p1' => 'IoT & Telematics Solution',
                'image2' => '1698050401mobility-and-automation.jpg',
                'alt_image2' => 'Mobility & Automation',
                'icon2' => '1698050401mobility-and-automation.png',
                'p2' => 'Mobility & Automation',
                'image3' => '1698050401digital-solution.jpg',
                'alt_image3' => 'Digital Solution',
                'icon3' => '1698050401digital-solutions.png',
                'p3' => 'Digital Solution',
                'image4' => '1698050401software.jpg',
                'alt_image4' => '1698050401software.png',
                'icon4' => '1698050401software.png',
                'p4' => 'Software Solution',
                'alt_icon1' => 'iot-and-telematics-solutions',
                'alt_icon2' => 'mobility and automation icon',
                'alt_icon3' => 'Digital Solution',
                'alt_icon4' => 'Software Solution',

                'created_at' => Null,
                'updated_at' =>'2023-10-23 12:06:04',
            ),
        ));
    }
}
