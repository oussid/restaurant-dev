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
            38 => 
            array (
                'id' => 39,
                'order_id' => 14,
                'product_id' => 13,
                'created_at' => '2023-05-12 09:21:09',
                'updated_at' => '2023-05-12 09:21:09',
                'quantity' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'order_id' => 14,
                'product_id' => 14,
                'created_at' => '2023-05-12 09:21:09',
                'updated_at' => '2023-05-12 09:21:09',
                'quantity' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'order_id' => 14,
                'product_id' => 12,
                'created_at' => '2023-05-12 09:21:09',
                'updated_at' => '2023-05-12 09:21:09',
                'quantity' => 3,
            ),
            41 => 
            array (
                'id' => 42,
                'order_id' => 14,
                'product_id' => 15,
                'created_at' => '2023-05-12 09:21:10',
                'updated_at' => '2023-05-12 09:21:10',
                'quantity' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'order_id' => 15,
                'product_id' => 7,
                'created_at' => '2023-05-12 09:21:36',
                'updated_at' => '2023-05-12 09:21:36',
                'quantity' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'order_id' => 15,
                'product_id' => 6,
                'created_at' => '2023-05-12 09:21:36',
                'updated_at' => '2023-05-12 09:21:36',
                'quantity' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'order_id' => 15,
                'product_id' => 5,
                'created_at' => '2023-05-12 09:21:36',
                'updated_at' => '2023-05-12 09:21:36',
                'quantity' => 4,
            ),
            45 => 
            array (
                'id' => 46,
                'order_id' => 16,
                'product_id' => 14,
                'created_at' => '2023-05-12 09:22:00',
                'updated_at' => '2023-05-12 09:22:00',
                'quantity' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'order_id' => 16,
                'product_id' => 13,
                'created_at' => '2023-05-12 09:22:00',
                'updated_at' => '2023-05-12 09:22:00',
                'quantity' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'order_id' => 16,
                'product_id' => 12,
                'created_at' => '2023-05-12 09:22:00',
                'updated_at' => '2023-05-12 09:22:00',
                'quantity' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'order_id' => 16,
                'product_id' => 9,
                'created_at' => '2023-05-12 09:22:00',
                'updated_at' => '2023-05-12 09:22:00',
                'quantity' => 4,
            ),
            49 => 
            array (
                'id' => 50,
                'order_id' => 17,
                'product_id' => 11,
                'created_at' => '2023-05-12 09:22:23',
                'updated_at' => '2023-05-12 09:22:23',
                'quantity' => 6,
            ),
            50 => 
            array (
                'id' => 51,
                'order_id' => 18,
                'product_id' => 14,
                'created_at' => '2023-05-12 09:22:41',
                'updated_at' => '2023-05-12 09:22:41',
                'quantity' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'order_id' => 18,
                'product_id' => 12,
                'created_at' => '2023-05-12 09:22:41',
                'updated_at' => '2023-05-12 09:22:41',
                'quantity' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'order_id' => 19,
                'product_id' => 13,
                'created_at' => '2023-05-12 09:23:12',
                'updated_at' => '2023-05-12 09:23:12',
                'quantity' => 15,
            ),
            53 => 
            array (
                'id' => 54,
                'order_id' => 20,
                'product_id' => 13,
                'created_at' => '2023-05-12 09:24:40',
                'updated_at' => '2023-05-12 09:24:40',
                'quantity' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'order_id' => 21,
                'product_id' => 12,
                'created_at' => '2023-05-12 10:10:18',
                'updated_at' => '2023-05-12 10:10:18',
                'quantity' => 4,
            ),
            55 => 
            array (
                'id' => 56,
                'order_id' => 21,
                'product_id' => 13,
                'created_at' => '2023-05-12 10:10:18',
                'updated_at' => '2023-05-12 10:10:18',
                'quantity' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'order_id' => 22,
                'product_id' => 8,
                'created_at' => '2023-05-12 10:10:44',
                'updated_at' => '2023-05-12 10:10:44',
                'quantity' => 28,
            ),
            57 => 
            array (
                'id' => 58,
                'order_id' => 23,
                'product_id' => 14,
                'created_at' => '2023-05-12 10:11:12',
                'updated_at' => '2023-05-12 10:11:12',
                'quantity' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'order_id' => 23,
                'product_id' => 12,
                'created_at' => '2023-05-12 10:11:12',
                'updated_at' => '2023-05-12 10:11:12',
                'quantity' => 4,
            ),
        ));
        
        
    }
}