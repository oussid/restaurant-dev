<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'delivery_man_id' => NULL,
                'order_number' => '#645643cc0a846',
                'location' => NULL,
                'total' => 97.93,
                'status' => -1,
                'created_at' => '2023-01-05 12:10:52',
                'updated_at' => '2023-05-06 12:10:52',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'delivery_man_id' => NULL,
                'order_number' => '#645643f3318b5',
                'location' => NULL,
                'total' => 63.92,
                'status' => -1,
                'created_at' => '2023-01-13 12:11:31',
                'updated_at' => '2023-05-06 12:11:31',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            2 => 
            array (
                'id' => 3,
                'customer_id' => 1,
                'delivery_man_id' => NULL,
                'order_number' => '#645644075adae',
                'location' => NULL,
                'total' => 87.89,
                'status' => -1,
                'created_at' => '2023-01-24 12:11:51',
                'updated_at' => '2023-05-06 12:11:51',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            3 => 
            array (
                'id' => 4,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#6456448f78130',
                'location' => NULL,
                'total' => 105.88,
                'status' => -1,
                'created_at' => '2023-02-04 12:14:07',
                'updated_at' => '2023-05-06 12:14:07',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            4 => 
            array (
                'id' => 5,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645644a4eae5f',
                'location' => NULL,
                'total' => 81.89,
                'status' => -1,
                'created_at' => '2023-02-22 12:14:28',
                'updated_at' => '2023-05-06 12:14:28',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            5 => 
            array (
                'id' => 6,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645644b79926f',
                'location' => NULL,
                'total' => 35.96,
                'status' => -1,
                'created_at' => '2023-02-10 12:14:47',
                'updated_at' => '2023-05-06 12:14:47',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            6 => 
            array (
                'id' => 7,
                'customer_id' => 14,
                'delivery_man_id' => NULL,
                'order_number' => '#6456450e202bf',
                'location' => NULL,
                'total' => 35.96,
                'status' => -1,
                'created_at' => '2023-03-01 12:16:14',
                'updated_at' => '2023-05-06 12:16:14',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            7 => 
            array (
                'id' => 8,
                'customer_id' => 14,
                'delivery_man_id' => NULL,
                'order_number' => '#6456452114d88',
                'location' => NULL,
                'total' => 17.97,
                'status' => -1,
                'created_at' => '2023-03-09 12:16:33',
                'updated_at' => '2023-05-06 12:16:33',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            8 => 
            array (
                'id' => 9,
                'customer_id' => 14,
                'delivery_man_id' => NULL,
                'order_number' => '#6456453c12225',
                'location' => NULL,
                'total' => 26.96,
                'status' => -1,
                'created_at' => '2023-03-22 12:17:00',
                'updated_at' => '2023-05-06 12:17:00',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            9 => 
            array (
                'id' => 10,
                'customer_id' => 15,
                'delivery_man_id' => NULL,
                'order_number' => '#6456458299295',
                'location' => NULL,
                'total' => 142.88,
                'status' => -1,
                'created_at' => '2023-04-11 12:18:10',
                'updated_at' => '2023-05-06 12:18:10',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            10 => 
            array (
                'id' => 11,
                'customer_id' => 15,
                'delivery_man_id' => NULL,
                'order_number' => '#6456459704cd4',
                'location' => NULL,
                'total' => 94.9,
                'status' => -1,
                'created_at' => '2023-04-27 12:18:31',
                'updated_at' => '2023-05-06 12:18:31',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            11 => 
            array (
                'id' => 12,
                'customer_id' => 16,
                'delivery_man_id' => NULL,
                'order_number' => '#645645d932009',
                'location' => NULL,
                'total' => 144.88,
                'status' => -1,
                'created_at' => '2023-05-06 12:19:37',
                'updated_at' => '2023-05-06 12:19:37',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            12 => 
            array (
                'id' => 13,
                'customer_id' => 16,
                'delivery_man_id' => NULL,
                'order_number' => '#645645f0a5770',
                'location' => NULL,
                'total' => 87.92,
                'status' => -1,
                'created_at' => '2023-05-06 12:20:00',
                'updated_at' => '2023-05-06 12:20:00',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
        ));
        
        
    }
}