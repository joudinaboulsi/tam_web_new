<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1698051980atd-logo.png',
                'alt_image' => 'atd-logo',
                'client' => Null,
                'website' => 'https://www.td.org/atd-contributors?offset=500',
                'created_at' => '2023-10-23 09:06:20',
                'updated_at' => '2023-10-23 09:06:20',
            ),

            1 => 
            array (
                'id' => 2,
                'image' => '1698052072builder-resources-logo.png',
                'alt_image' => 'builder-resources-logo',
                'client' => Null,
                'website' => 'https://www.builder-resources.com/',
                'created_at' => '2023-10-23 09:07:52',
                'updated_at' => '2023-10-23 09:07:52',
            ),

            2 => 
            array (
                'id' => 3,
                'image' => '1698052096darycet-logo.png',
                'alt_image' => '1698052096darycet-logo.png',
                'client' => Null,
                'website' => 'https://www.darycet.com/',
                'created_at' => '2023-10-23 09:08:16',
                'updated_at' => '2023-10-23 09:08:16',
            ),

            3 => 
            array (
                'id' => 4,
                'image' => '1698052133emd-global-logo.png',
                'alt_image' => 'emd-global-logo',
                'client' => Null,
                'website' => 'http://www.emdglobal.co/',
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),

            4 => 
            array (
                'id' => 5,
                'image' => '1698052157raycon-logo.png',
                'alt_image' => 'raycon-logo',
                'client' => Null,
                'website' => 'https://www.raycon.net/',
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),

            5 => 
            array (
                'id' => 6,
                'image' => '1698052178sewatech-logo.png',
                'alt_image' => 'sewatech-logo',
                'client' => Null,
                'website' => 'https://sewatechnigeria.com/',
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),

            6 => 
            array (
                'id' => 7,
                'image' => '1698052207spg-logo.jpg',
                'alt_image' => 'spg-logo',
                'client' => Null,
                'website' => 'https://spgnigeria.com/',
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => Null,
                'alt_image' => Null,
                'client' => 'ALEED',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),
            
            8=>array (
                'id' => 9,
                'image' => Null,
                'alt_image' => Null,
                'client' => 'RADOC',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),
            9=> array (
                'id' => 10,
                'image' => Null,
                'alt_image' => Null,
                'client' => '4nd',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),

            10=> array (
                'id' => 11,
                'image' => Null,
                'alt_image' => Null,
                'client' => 'BUILDISA',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),
            11=> array (
                'id' => 12,
                'image' => Null,
                'alt_image' => Null,
                'client' => 'SLIVA',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),

            12=> array (
                'id' => 13,
                'image' => Null,
                'alt_image' => Null,
                'client' => 'M&M',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),

            13=> array (
                'id' => 14,
                'image' => Null,
                'alt_image' => Null,
                'client' => 'M&SPARTROX',
                'website' => Null,
                'created_at' => '2023-10-23 09:08:53',
                'updated_at' => '2023-10-23 09:08:53',
            ),
        ));
    }
}
