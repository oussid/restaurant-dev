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
                'order_number' => '#64536de222439',
                'location' => NULL,
                'total' => 43.93,
                'status' => -1,
                'created_at' => '2023-05-04 08:33:38',
                'updated_at' => '2023-05-04 08:33:38',
                'delivery_type' => 'delivery',
                'address' => 'Monalogog lma mls obj',
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'delivery_man_id' => NULL,
                'order_number' => '#64536dfce3a1d',
                'location' => NULL,
                'total' => 92.93,
                'status' => -1,
                'created_at' => '2023-05-04 08:34:04',
                'updated_at' => '2023-05-04 08:34:04',
                'delivery_type' => 'delivery',
                'address' => 'So cheap',
            ),
            2 => 
            array (
                'id' => 3,
                'customer_id' => 12,
                'delivery_man_id' => NULL,
                'order_number' => '#6453f18f863a7',
                'location' => NULL,
                'total' => 71.9,
                'status' => -1,
                'created_at' => '2023-05-04 17:55:27',
                'updated_at' => '2023-05-04 17:55:27',
                'delivery_type' => 'delivery',
                'address' => 'Idk',
            ),
            3 => 
            array (
                'id' => 4,
                'customer_id' => 12,
                'delivery_man_id' => NULL,
                'order_number' => '#6453f1badbec2',
                'location' => NULL,
                'total' => 17.98,
                'status' => -1,
                'created_at' => '2023-05-04 17:56:10',
                'updated_at' => '2023-05-04 17:56:10',
                'delivery_type' => 'takeout',
                'address' => 'local',
            ),
        ));
        
        
    }
}