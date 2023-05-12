<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'uploads/1683751466-Hola my name.jpg',
                'title' => 'Welcome to Our Restaurant',
                'subtitle' => 'Discover our unique and delicious dishes',
                'cta_button' => 'View Products',
                'cta_url' => '/booking',
                'created_at' => '2023-05-10 20:44:26',
                'updated_at' => '2023-05-12 10:24:54',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'uploads/1683845527-ENJOY A FAMILY FRIENDLY COSY ENVIRONEMENT!.jpg',
                'title' => 'ENJOY A FAMILY FRIENDLY COSY ENVIRONEMENT!',
                'subtitle' => 'Book Your Table Now!',
                'cta_button' => 'BOOK TABLE',
                'cta_url' => '/booking',
                'created_at' => '2023-05-11 22:52:07',
                'updated_at' => '2023-05-11 22:52:07',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'uploads/1683886824-Perfect for Any Occasion.jpg',
                'title' => 'Perfect for Any Occasion',
                'subtitle' => 'Whether it\'s a romantic dinner or family gathering',
                'cta_button' => 'Book a Table',
                'cta_url' => '/booking',
                'created_at' => '2023-05-12 10:20:24',
                'updated_at' => '2023-05-12 10:20:24',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'uploads/1683887201-Local and Seasonal Ingredients.png',
                'title' => 'Local and Seasonal Ingredients',
                'subtitle' => 'We source our ingredients from nearby farms and markets',
                'cta_button' => 'Explore',
                'cta_url' => '/products',
                'created_at' => '2023-05-12 10:26:41',
                'updated_at' => '2023-05-12 10:26:41',
            ),
        ));
        
        
    }
}