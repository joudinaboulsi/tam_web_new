<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo' => '1698058118tam-logo.png',
                'alt_logo' => 'logo',
                'email1' => 'pierre.dina@tamtrack.com',
                'email2' => 'roland.moubarak@tamtrack.com',
                'linkedin' => 'https://www.linkedin.com/in/pierre-jr-dina-b693b228b',
                'instagram' => 'https://instagram.com/trackingandmonitoring?igshid=YTQwZjQ0NmI0OA==',
                'whatsaplink' => 'https://wa.me/23409155575777',
                'address' => 'No. 7 Eletu Ogabi Street, Victoria Island Lagos State',
                'phone1' => '+234 (80) - 63177773',
                'phone2' => '+234 (91) - 55575777',
                'tel_href' => '+2349155575777',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7327919552704!2d3.4215231000000004!3d6.4283646999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf52d7d43c46f%3A0x7fde085409794325!2s7%20Eletu%20Ogabi%20St%2C%20Victoria%20Island%20106104%2C%20Lagos%2C%20Nigeria!5e0!3m2!1sen!2slb!4v1695375161792!5m2!1sen!2slb',
                'contact_header' => 'Contact Our Team',
                'scrollTo' => 'contact',
                'tel' => '+2348063177773',
                'title_header' => 'Tam',
                'created_at' => NULL,
                'updated_at' => '2023-10-23 11:10:51',
            ),
        ));
        
    }
}
