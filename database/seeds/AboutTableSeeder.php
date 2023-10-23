<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subtitle' => 'ABOUT AGENCY',
                'title' => 'WELCOME TO OUR COMAPNY',
                'text' => '<p>Tracking and monitoring technology enterprise, is an established company in Nigeria since 2017. Trusted by many companies and government agencies across West Africa. We bring the latest technologies in automation, digital solutions GIS, and IoT to our clients. The company was created from a simple idea. How to minimize losses and control fuel consumption on our equipment. After many research we successfully integrated with TECHNOTON JV as a seller and repair center for Africa, then we opened up to became a partner with WIALON by GURTAM one of the leading tracking software provider in the world.</p>',
                'btn_text' => 'Download Brochure',
                'pdf' => '1698047866tracking-and-monitoring.pdf',
                'image1' => '1698047776about-1-1.jpg',
                'alt_image1' => 'about tracking and monitoring',
                'image2' => '1698047776about-1-2.jpg',
                'alt_image2' => 'about tam',
                'created_at' => NULL,
                'updated_at' => '2023-10-23 11:10:51',
            ),
        ));
    }
}
