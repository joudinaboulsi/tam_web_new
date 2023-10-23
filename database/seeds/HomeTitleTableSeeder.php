<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_titles')->delete();
        
        \DB::table('home_titles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_product' => 'Our Products',
                'title_project' => Null,
                'subtitle_project' => Null,
                'title_client' => Null,
                'created_at' => NULL,
                'updated_at' => '2023-10-23 08:50:42',
            ),

            1 => 
            array (
                'id' => 2,
                'title_product' => Null,
                'title_project' => 'Recent clients projects',
                'subtitle_project' => 'our completed works',
                'title_client' => Null,
                'created_at' => NULL,
                'updated_at' => '2023-10-23 10:02:33',
            ),

            2 => 
            array (
                'id' => 3,
                'title_product' => Null,
                'title_project' => Null,
                'subtitle_project' => Null,
                'title_client' => 'OUR CLIENTS',
                'created_at' => NULL,
                'updated_at' => '2023-10-23 09:05:41',
            ),
        ));
    }
}
