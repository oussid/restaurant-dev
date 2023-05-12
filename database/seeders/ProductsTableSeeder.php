<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Classic Burger',
                'category_id' => 1,
                'image' => 'uploads/1683188366-Classic Burger.jpg',
                'description' => NULL,
                'price' => 6.99,
                'created_at' => '2023-05-04 08:19:26',
                'updated_at' => '2023-05-04 08:19:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bacon Cheeseburger',
                'category_id' => 1,
                'image' => 'uploads/1683188513-Bacon Cheeseburger.jpg',
                'description' => NULL,
                'price' => 8.99,
                'created_at' => '2023-05-04 08:21:53',
                'updated_at' => '2023-05-04 08:21:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mushroom Swiss Burger',
                'category_id' => 1,
                'image' => 'uploads/1683188546-Mushroom Swiss Burger.jpg',
                'description' => NULL,
                'price' => 13.99,
                'created_at' => '2023-05-04 08:22:26',
                'updated_at' => '2023-05-04 08:22:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Buffalo Wings',
                'category_id' => 3,
                'image' => 'uploads/1683188619-Buffalo Wings.jpg',
                'description' => NULL,
                'price' => 5.99,
                'created_at' => '2023-05-04 08:23:39',
                'updated_at' => '2023-05-04 08:23:39',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Fried Calamari',
                'category_id' => 3,
                'image' => 'uploads/1683188659-Fried Calamari.jpg',
                'description' => NULL,
                'price' => 11.99,
                'created_at' => '2023-05-04 08:24:19',
                'updated_at' => '2023-05-04 08:24:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mozzarella Sticks',
                'category_id' => 3,
                'image' => 'uploads/1683188702-Mozzarella Sticks.jpg',
                'description' => NULL,
                'price' => 5.99,
                'created_at' => '2023-05-04 08:25:02',
                'updated_at' => '2023-05-04 08:25:02',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Hawaiian Pizza',
                'category_id' => 2,
                'image' => 'uploads/1683188733-Hawaiian Pizza.jpg',
                'description' => NULL,
                'price' => 8.99,
                'created_at' => '2023-05-04 08:25:33',
                'updated_at' => '2023-05-04 08:25:33',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Margheritta Pizza',
                'category_id' => 2,
                'image' => 'uploads/1683188797-Margheritta Pizza.jpg',
                'description' => NULL,
                'price' => 7.99,
                'created_at' => '2023-05-04 08:26:37',
                'updated_at' => '2023-05-04 08:26:37',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Pepperoni Pizza',
                'category_id' => 2,
                'image' => 'uploads/1683188843-Pepperoni Pizza.jpg',
                'description' => NULL,
                'price' => 6.99,
                'created_at' => '2023-05-04 08:27:23',
                'updated_at' => '2023-05-04 08:27:23',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Ceasar Salad',
                'category_id' => 4,
                'image' => 'uploads/1683188881-Ceasar Salad.jpg',
                'description' => NULL,
                'price' => 4.99,
                'created_at' => '2023-05-04 08:28:01',
                'updated_at' => '2023-05-04 08:28:01',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Cobb Salad',
                'category_id' => 4,
                'image' => 'uploads/1683843696-Cobb Salad.jpg',
                'description' => NULL,
                'price' => 5.99,
                'created_at' => '2023-05-04 08:28:34',
                'updated_at' => '2023-05-04 08:28:34',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Greek Salad',
                'category_id' => 4,
                'image' => 'uploads/1683188937-Greek Salad.jpg',
                'description' => NULL,
                'price' => 5.99,
                'created_at' => '2023-05-04 08:28:57',
                'updated_at' => '2023-05-04 08:28:57',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'BLT Sandwich',
                'category_id' => 5,
                'image' => 'uploads/1683843682-BLT Sandwich.jpg',
                'description' => NULL,
                'price' => 6.99,
                'created_at' => '2023-05-04 08:29:31',
                'updated_at' => '2023-05-04 08:29:31',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Club Sandwich',
                'category_id' => 5,
                'image' => 'uploads/1683843657-Club Sandwich.jpg',
                'description' => NULL,
                'price' => 6.99,
                'created_at' => '2023-05-04 08:29:54',
                'updated_at' => '2023-05-04 08:29:54',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Philly Cheeseteak Sandwich',
                'category_id' => 5,
                'image' => 'uploads/1683843615-Philly Cheeseteak Sandwich.jpg',
                'description' => NULL,
                'price' => 7.99,
                'created_at' => '2023-05-04 08:30:37',
                'updated_at' => '2023-05-04 08:30:37',
            ),
        ));
        
        
    }
}