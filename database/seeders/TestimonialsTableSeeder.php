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
                'name' => 'Luke Belmar',
                'image' => 'uploads/1683223406-Luke Belmar.jpg',
                'url' => 'https://sample.idsaid.com',
            'text' => 'Very nice waitresses :)',
            'created_at' => '2023-05-04 18:03:26',
            'updated_at' => '2023-05-04 18:03:26',
        ),
        1 => 
        array (
            'id' => 3,
            'name' => 'Fred Jacks',
            'image' => 'uploads/1683223535-Fred Jacks.png',
            'url' => 'https://fork.idsaid.com',
            'text' => 'Clean website poor service...
jk jk
Poor website poor service',
            'created_at' => '2023-05-04 18:05:35',
            'updated_at' => '2023-05-04 18:05:35',
        ),
    ));
        
        
    }
}