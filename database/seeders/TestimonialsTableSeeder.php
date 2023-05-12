<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'John Smith',
                'image' => 'uploads/1683223406-Luke Belmar.jpg',
                'url' => 'https://maps.google.com',
                'text' => 'Amazing food and cozy atmosphere! Highly recommended.',
                'created_at' => '2023-05-04 18:03:26',
                'updated_at' => '2023-05-11 22:45:20',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Fred Jacks',
                'image' => 'uploads/1683223535-Fred Jacks.png',
                'url' => 'https://maps.google.com',
                'text' => 'Incredible dishes and exceptional service. I couldn\'t ask for more!',
                'created_at' => '2023-05-04 18:05:35',
                'updated_at' => '2023-05-11 22:46:01',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Sarah Johnson',
                'image' => 'uploads/1683845257-Sarah Johnson.png',
                'url' => 'https://maps.google.com',
                'text' => 'The best restaurant in town, hands down. I can\'t wait to come back!',
                'created_at' => '2023-05-11 22:47:37',
                'updated_at' => '2023-05-11 22:47:37',
            ),
        ));
        
        
    }
}