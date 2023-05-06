<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_product')->delete();
        
        \DB::table('order_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:10:52',
                'updated_at' => '2023-05-06 12:10:52',
                'quantity' => 7,
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 2,
                'product_id' => 8,
                'created_at' => '2023-05-06 12:11:31',
                'updated_at' => '2023-05-06 12:11:31',
                'quantity' => 8,
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 3,
                'product_id' => 15,
                'created_at' => '2023-05-06 12:11:51',
                'updated_at' => '2023-05-06 12:11:51',
                'quantity' => 11,
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 4,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:14:07',
                'updated_at' => '2023-05-06 12:14:07',
                'quantity' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => 4,
                'product_id' => 8,
                'created_at' => '2023-05-06 12:14:07',
                'updated_at' => '2023-05-06 12:14:07',
                'quantity' => 7,
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => 4,
                'product_id' => 7,
                'created_at' => '2023-05-06 12:14:07',
                'updated_at' => '2023-05-06 12:14:07',
                'quantity' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'order_id' => 5,
                'product_id' => 1,
                'created_at' => '2023-05-06 12:14:28',
                'updated_at' => '2023-05-06 12:14:28',
                'quantity' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'order_id' => 5,
                'product_id' => 2,
                'created_at' => '2023-05-06 12:14:28',
                'updated_at' => '2023-05-06 12:14:28',
                'quantity' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'order_id' => 5,
                'product_id' => 6,
                'created_at' => '2023-05-06 12:14:28',
                'updated_at' => '2023-05-06 12:14:28',
                'quantity' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'order_id' => 6,
                'product_id' => 4,
                'created_at' => '2023-05-06 12:14:47',
                'updated_at' => '2023-05-06 12:14:47',
                'quantity' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'order_id' => 6,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:14:47',
                'updated_at' => '2023-05-06 12:14:47',
                'quantity' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'order_id' => 6,
                'product_id' => 2,
                'created_at' => '2023-05-06 12:14:47',
                'updated_at' => '2023-05-06 12:14:47',
                'quantity' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'order_id' => 6,
                'product_id' => 1,
                'created_at' => '2023-05-06 12:14:47',
                'updated_at' => '2023-05-06 12:14:47',
                'quantity' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'order_id' => 7,
                'product_id' => 1,
                'created_at' => '2023-05-06 12:16:14',
                'updated_at' => '2023-05-06 12:16:14',
                'quantity' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'order_id' => 7,
                'product_id' => 2,
                'created_at' => '2023-05-06 12:16:14',
                'updated_at' => '2023-05-06 12:16:14',
                'quantity' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'order_id' => 7,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:16:14',
                'updated_at' => '2023-05-06 12:16:14',
                'quantity' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'order_id' => 7,
                'product_id' => 4,
                'created_at' => '2023-05-06 12:16:14',
                'updated_at' => '2023-05-06 12:16:14',
                'quantity' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'order_id' => 8,
                'product_id' => 10,
                'created_at' => '2023-05-06 12:16:33',
                'updated_at' => '2023-05-06 12:16:33',
                'quantity' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'order_id' => 8,
                'product_id' => 11,
                'created_at' => '2023-05-06 12:16:33',
                'updated_at' => '2023-05-06 12:16:33',
                'quantity' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'order_id' => 8,
                'product_id' => 9,
                'created_at' => '2023-05-06 12:16:33',
                'updated_at' => '2023-05-06 12:16:33',
                'quantity' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'order_id' => 9,
                'product_id' => 7,
                'created_at' => '2023-05-06 12:17:00',
                'updated_at' => '2023-05-06 12:17:00',
                'quantity' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'order_id' => 9,
                'product_id' => 10,
                'created_at' => '2023-05-06 12:17:00',
                'updated_at' => '2023-05-06 12:17:00',
                'quantity' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'order_id' => 9,
                'product_id' => 9,
                'created_at' => '2023-05-06 12:17:00',
                'updated_at' => '2023-05-06 12:17:00',
                'quantity' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'order_id' => 9,
                'product_id' => 11,
                'created_at' => '2023-05-06 12:17:00',
                'updated_at' => '2023-05-06 12:17:00',
                'quantity' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'order_id' => 10,
                'product_id' => 7,
                'created_at' => '2023-05-06 12:18:10',
                'updated_at' => '2023-05-06 12:18:10',
                'quantity' => 5,
            ),
            25 => 
            array (
                'id' => 26,
                'order_id' => 10,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:18:10',
                'updated_at' => '2023-05-06 12:18:10',
                'quantity' => 7,
            ),
            26 => 
            array (
                'id' => 27,
                'order_id' => 11,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:18:31',
                'updated_at' => '2023-05-06 12:18:31',
                'quantity' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'order_id' => 11,
                'product_id' => 2,
                'created_at' => '2023-05-06 12:18:31',
                'updated_at' => '2023-05-06 12:18:31',
                'quantity' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'order_id' => 11,
                'product_id' => 1,
                'created_at' => '2023-05-06 12:18:31',
                'updated_at' => '2023-05-06 12:18:31',
                'quantity' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'order_id' => 11,
                'product_id' => 6,
                'created_at' => '2023-05-06 12:18:31',
                'updated_at' => '2023-05-06 12:18:31',
                'quantity' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'order_id' => 12,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:19:37',
                'updated_at' => '2023-05-06 12:19:37',
                'quantity' => 9,
            ),
            31 => 
            array (
                'id' => 32,
                'order_id' => 12,
                'product_id' => 10,
                'created_at' => '2023-05-06 12:19:37',
                'updated_at' => '2023-05-06 12:19:37',
                'quantity' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'order_id' => 12,
                'product_id' => 11,
                'created_at' => '2023-05-06 12:19:37',
                'updated_at' => '2023-05-06 12:19:37',
                'quantity' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'order_id' => 12,
                'product_id' => 15,
                'created_at' => '2023-05-06 12:19:37',
                'updated_at' => '2023-05-06 12:19:37',
                'quantity' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'order_id' => 13,
                'product_id' => 3,
                'created_at' => '2023-05-06 12:20:00',
                'updated_at' => '2023-05-06 12:20:00',
                'quantity' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'order_id' => 13,
                'product_id' => 5,
                'created_at' => '2023-05-06 12:20:00',
                'updated_at' => '2023-05-06 12:20:00',
                'quantity' => 5,
            ),
            36 => 
            array (
                'id' => 37,
                'order_id' => 13,
                'product_id' => 6,
                'created_at' => '2023-05-06 12:20:00',
                'updated_at' => '2023-05-06 12:20:00',
                'quantity' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'order_id' => 13,
                'product_id' => 8,
                'created_at' => '2023-05-06 12:20:00',
                'updated_at' => '2023-05-06 12:20:00',
                'quantity' => 1,
            ),
        ));
        
        
    }
}