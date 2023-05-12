<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inboxes')->delete();
        
        \DB::table('inboxes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'first_name' => 'Mark',
                'last_name' => 'Lewis',
                'email' => 'markooo@gmail.com',
                'message' => 'Hey, I was just wondering if you guys deliver food to Marrakech??',
                'created_at' => '2023-05-11 23:32:57',
                'updated_at' => '2023-05-11 23:32:57',
            ),
        ));
        
        
    }
}