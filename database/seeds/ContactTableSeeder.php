<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subtitle' => 'CONTACT WITH US',
                'title' => 'LET’S WORK TOGETHER',
                'image' => '1698056765contact-1.jpg',
                'alt_image' => 'contact',
                'created_at' => NULL,
                'updated_at' => '2023-10-23 10:26:05',
            ),
        ));
    }
}
