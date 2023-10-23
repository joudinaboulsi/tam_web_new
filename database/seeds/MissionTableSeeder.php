<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('missions')->delete();
        
        \DB::table('missions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_mission' => 'Our Mission',
                'title_vision' => 'our vision',
                'btn_text' => 'Your Interest',
                'scrollTo' => 'vision',
                'text' => '<p>We strive to offer our clients based on our experience and their vision with innovative cloud-bases automation, IoT, GIS and software.Our mission to be the most dynamic IoT &amp; Telematics company in Nigeria and West Africa.</p>',
                'image' => '1698053544cta-bg-1.jpg',
                'title1' => 'IOT & TELEMATICS Solutions',
                'p1' => '<p>GPS Tracking<br>Fleet Management &amp; Preventive Maintenance<br>Driver AI Behavior Monitoring<br>General Fuel Consumption Monitoring<br>Smart Farming<br>Eco Driving<br>Dispatching &amp; Route Optimization<br>IoT Hardware</p>',
                'title2' => 'MOBILITY & AUTOMATION Solutions',
                'p2'   =>'<p>Sales Force Automation&nbsp;<br>Warehouse Automation<br>Field Service Automation<br>Asset Tracking &amp; Management System<br>Inspection Management Solution<br>Retail Automation<br>Fuel Delivery System<br>E-Citation Solution<br>ODOO ERP Solution</p>',
                'title3' => 'DIGITAL Solutions',
                'p3' => '<p>Digital Signage&nbsp;<br>Digital Analytics<br>Audience Analytics<br>Dynamic Signage<br>Queue Management<br>Self Service Interface<br>Interactive Whiteboard&nbsp;<br>Self-Checkout</p>',
                'title4' => 'SOFTWARE Solutions',
                'p4' => '<p>Logistics<br>Warehousing Deliveries Assets<br>Management Generator Monitoring</p>',
                'created_at' => NULL,
                'updated_at' => '2023-10-23 09:59:05',
            ),
        ));
    }
}
