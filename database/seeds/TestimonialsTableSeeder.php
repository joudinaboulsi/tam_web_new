<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image1' => '1698220808testimonial-1-1.jpg',
                'alt_image1' => 'testimonial',
                'name' => 'aleesha michale',
                'info' => 'ceo & co founder',
                'text'  =>'<p>This is due to their excellent service, competitive pricing and customer support. It&rsquo;s&nbsp;through refresing to get such a personal touch.&nbsp;Duis aute irure dolor in reprehenderit esse simply free text available in the market.</p>',
                'created_at' => '2023-10-25 08:00:08',
                'updated_at' => '2023-10-25 08:01:53',
            ),

            1 => 
            array (
                'id' => 2,
                'image1' => '1698220986testimonial-2-2.jpg',
                'alt_image1' => 'testimonial',
                'name' => 'aleesha michale',
                'info' => 'ceo & co founder',
                'text'  =>'<p>This is due to their excellent service, competitive pricing and customer support. It&rsquo;s&nbsp;through refresing to get such a personal touch.&nbsp;Duis aute irure dolor in reprehenderit esse simply free text available in the market.</p>',
                'created_at' => '2023-10-25 08:00:08',
                'updated_at' => '2023-10-25 08:01:53',
            ),

           
        ));
    }
}
