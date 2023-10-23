<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('seo_pages')->delete();
        
        \DB::table('seo_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'meta_title' => 'Tracking and Monitoring | Tam',
                'meta_description' => '<p>Tracking and monitoring technology enterprise is an established company in Nigeria. We are your trusted partner for automation, digital solutions GIS, and IoT.</p>',
                'meta_keywords' => '<p>Tracking and monitoring, Automation technology, Digital solutions company, GIS services, IoT solutions provider, Technology automation experts, TAM, Innovative technology solutions, IoT implementation services, tam in nigeria</p>',
                'image' => '1698062182tam-logo.png',
                'created_at' => Null,
                'updated_at' =>'2023-10-23 12:06:04',
            ),
        ));
    }
}
