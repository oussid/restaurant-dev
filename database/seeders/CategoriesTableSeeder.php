<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Burgers',
                'image' => 'uploads/1683188217-Burgers.jpg',
                'created_at' => '2023-05-04 08:16:57',
                'updated_at' => '2023-05-04 08:16:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pizzas',
                'image' => 'uploads/1683188239-Pizzas.jpg',
                'created_at' => '2023-05-04 08:17:19',
                'updated_at' => '2023-05-04 08:17:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Appetizers',
                'image' => 'uploads/1683188256-Appetizers.jpg',
                'created_at' => '2023-05-04 08:17:36',
                'updated_at' => '2023-05-04 08:17:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Salads',
                'image' => 'uploads/1683188276-Salads.jpg',
                'created_at' => '2023-05-04 08:17:56',
                'updated_at' => '2023-05-04 08:17:56',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sandwiches',
                'image' => 'uploads/1683188295-Sandwiches.png',
                'created_at' => '2023-05-04 08:18:15',
                'updated_at' => '2023-05-04 08:18:15',
            ),
        ));
        
        
    }
}