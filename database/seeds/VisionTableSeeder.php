<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('visions')->delete();
        
        \DB::table('visions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subtitle' => 'vision',
                'title' => 'our Vision',
                'text' => '<p>&nbsp;TRACKING AND MONITORING TECHNOLOGY ENTERPRISE is developing based on the field requirements , Staff and management are following seminars webinars training to develop their capabilities and stay competitive by providing the best and latest knowledge.<br>The company is always looking for new opportunities and services in telematics and software development by integrating&nbsp; with other leading companies in such&nbsp;fields.</p>',
                'image' => '1698063203choose-1.jpg',
                'alt_image' => 'traking and monitoring tam vision',
                'counter1'=>'3800',
                'p1' => 'Projects has been completed',
                'counter2'=>'886',
                'p2' => 'Projects Completed',
                'counter3'=>'601',
                'p3' => 'Satisfied Customers',
                'counter4'=>'960',
                'p4' => 'Repeat Customers',
                'counter5'=>'240',
                'p5' => 'Extra Team',
                'created_at' => NULL,
                'updated_at' => '2023-10-23 12:21:07',
            ),
        ));
    }
    
}
