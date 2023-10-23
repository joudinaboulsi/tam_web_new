<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1698055384portfolio-img1.jpg',
                'alt_image'=>'project1',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1698055403portfolio-img2.jpg',
                'alt_image'=>'project2',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1698055415portfolio-img3.jpg',
                'alt_image'=>'project3',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '1698055433portfolio-img4.jpg',
                'alt_image'=>'project4',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            4=> 
            array (
                'id' => 5,
                'image' => '1698055448portfolio-img5.jpg',
                'alt_image'=>'project5',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

            5=> 
            array (
                'id' => 6,
                'image' => '1698055461portfolio-img6.jpg',
                'alt_image'=>'project6',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            6=> 
            array (
                'id' => 7,
                'image' => '1698055473portfolio-img7.jpg',
                'alt_image'=>'project7',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

            7=> 
            array (
                'id' => 8,
                'image' => '1698055487portfolio-img8.jpg',
                'alt_image'=>'project8',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            8=> 
            array (
                'id' => 9,
                'image' => '1698055502portfolio-img9.jpg',
                'alt_image'=>'project9',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

            9=> 
            array (
                'id' => 10,
                'image' => '1698055517portfolio-img10.jpg',
                'alt_image'=>'project10',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            10=> 
            array (
                'id' => 11,
                'image' => '1698055536portfolio-img11.jpg',
                'alt_image'=>'project11',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            11=> 
            array (
                'id' => 12,
                'image' => '1698055546portfolio-img12.jpg',
                'alt_image'=>'project12',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            12=> 
            array (
                'id' => 13,
                'image' => '1698055560portfolio-img13.jpg',
                'alt_image'=>'project13',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),
            13=> 
            array (
                'id' => 14,
                'image' => '1698055575portfolio-img14.jpg',
                'alt_image'=>'project14',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

            14=> 
            array (
                'id' => 15,
                'image' => '1698055588portfolio-img15.jpg',
                'alt_image'=>'project15',
                'video'=>Null,
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

            15=> 
            array (
                'id' => 16,
                'image' => '',
                'alt_image'=>Null,
                'video'=>'1698055597portfolio-video1.mp4',
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

            16=> 
            array (
                'id' => 17,
                'image' => '',
                'alt_image'=>Null,
                'video'=>'1698055606portfolio-video2.mp4',
                'created_at' => '2023-10-23 10:03:04',
                'updated_at' =>'2023-10-23 10:03:04',
            ),

        ));
    }
}
