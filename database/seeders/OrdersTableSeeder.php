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
            13 => 
            array (
                'id' => 14,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645e0505eb8f6',
                'location' => NULL,
                'total' => 47.93,
                'status' => 0,
                'created_at' => '2023-05-12 09:21:09',
                'updated_at' => '2023-05-12 10:13:05',
                'delivery_type' => 'delivery',
                'address' => 'Mohammed Ben Abdellah Street, Building 42, Apartment 5, Agdal, Rabat 10090',
            ),
            14 => 
            array (
                'id' => 15,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645e0520a767c',
                'location' => NULL,
                'total' => 62.94,
                'status' => -1,
                'created_at' => '2023-05-12 09:21:36',
                'updated_at' => '2023-05-12 09:21:36',
                'delivery_type' => 'delivery',
                'address' => 'Mohammed Ben Abdellah Street, Building 42, Apartment 5, Agdal, Rabat 10090',
            ),
            15 => 
            array (
                'id' => 16,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645e05385d3b2',
                'location' => NULL,
                'total' => 47.93,
                'status' => -1,
                'created_at' => '2023-05-12 09:22:00',
                'updated_at' => '2023-05-12 09:22:00',
                'delivery_type' => 'delivery',
                'address' => 'Mohammed Ben Abdellah Street, Building 42, Apartment 5, Agdal, Rabat 10090',
            ),
            16 => 
            array (
                'id' => 17,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645e054f3cf34',
                'location' => NULL,
                'total' => 35.94,
                'status' => -1,
                'created_at' => '2023-05-12 09:22:23',
                'updated_at' => '2023-05-12 09:22:23',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
            17 => 
            array (
                'id' => 18,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645e0561e4651',
                'location' => NULL,
                'total' => 12.98,
                'status' => -1,
                'created_at' => '2023-05-12 09:22:41',
                'updated_at' => '2023-05-12 09:22:41',
                'delivery_type' => 'delivery',
                'address' => 'Mohammed Ben Abdellah Street, Building 42, Apartment 5, Agdal, Rabat 10090',
            ),
            18 => 
            array (
                'id' => 19,
                'customer_id' => 13,
                'delivery_man_id' => NULL,
                'order_number' => '#645e0580ce3a6',
                'location' => NULL,
                'total' => 104.85,
                'status' => -1,
                'created_at' => '2023-05-12 09:23:12',
                'updated_at' => '2023-05-12 09:23:12',
                'delivery_type' => 'delivery',
                'address' => 'Mohammed Ben Abdellah Street, Building 42, Apartment 5, Agdal, Rabat 10090',
            ),
            19 => 
            array (
                'id' => 20,
                'customer_id' => 12,
                'delivery_man_id' => 18,
                'order_number' => '#645e05d839be0',
                'location' => NULL,
                'total' => 6.99,
                'status' => 2,
                'created_at' => '2023-05-12 09:24:40',
                'updated_at' => '2023-05-12 09:25:24',
                'delivery_type' => 'delivery',
                'address' => 'Rue Ibn Toufail, Villa 27, Quartier Palmier, Casablanca 20000',
            ),
            20 => 
            array (
                'id' => 21,
                'customer_id' => 15,
                'delivery_man_id' => NULL,
                'order_number' => '#645e108abb2bc',
                'location' => NULL,
                'total' => 37.94,
                'status' => -1,
                'created_at' => '2023-05-12 10:10:18',
                'updated_at' => '2023-05-12 10:10:18',
                'delivery_type' => 'delivery',
                'address' => 'Boulevard Mohammed V, Immeuble Oumnia, Bureau 8, Quartier Maarif, Casablanca 20100',
            ),
            21 => 
            array (
                'id' => 22,
                'customer_id' => 15,
                'delivery_man_id' => NULL,
                'order_number' => '#645e10a49df67',
                'location' => NULL,
                'total' => 223.72,
                'status' => -1,
                'created_at' => '2023-05-12 10:10:44',
                'updated_at' => '2023-05-12 10:10:44',
                'delivery_type' => 'delivery',
                'address' => 'Boulevard Mohammed V, Immeuble Oumnia, Bureau 8, Quartier Maarif, Casablanca 20100',
            ),
            22 => 
            array (
                'id' => 23,
                'customer_id' => 15,
                'delivery_man_id' => NULL,
                'order_number' => '#645e10c004730',
                'location' => NULL,
                'total' => 30.95,
                'status' => -1,
                'created_at' => '2023-05-12 10:11:12',
                'updated_at' => '2023-05-12 10:11:12',
                'delivery_type' => 'delivery',
                'address' => 'Boulevard Mohammed V, Immeuble Oumnia, Bureau 8, Quartier Maarif, Casablanca 20100',
            ),
        ));
        
        
    }
}