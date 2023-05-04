<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tables')->delete();
        
        \DB::table('tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 'A5',
                'floor' => '3rd',
                'position' => 'By the window',
                'created_at' => '2023-05-04 18:09:16',
                'updated_at' => '2023-05-04 18:09:16',
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 'A2',
                'floor' => 'Ground',
                'position' => 'In the corner',
                'created_at' => '2023-05-04 18:09:26',
                'updated_at' => '2023-05-04 18:09:26',
            ),
            2 => 
            array (
                'id' => 3,
                'number' => 'B12',
                'floor' => '2nd',
                'position' => 'By the window',
                'created_at' => '2023-05-04 18:09:42',
                'updated_at' => '2023-05-04 18:09:42',
            ),
        ));
        
        
    }
}