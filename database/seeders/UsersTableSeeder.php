<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Oussama',
                'email' => 'idsaidgoldman@gmail.com',
                'mobile' => '0682359060',
                'profile_pic' => NULL,
                'password' => '$2y$10$NaYKoPRkKzp4gUbYKsXKPup3nOnJRz.d0PwifGgnf0WMtla1X3Exe',
                'role' => 2,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-02 13:59:12',
                'updated_at' => '2023-05-04 08:39:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Camille Zulauf',
                'email' => 'mcdermott.tressa@example.net',
                'mobile' => '469-556-6057',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => '5nRtWM7rAX',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ellsworth Reinger',
                'email' => 'pete.daniel@example.com',
                'mobile' => '1-534-908-5851',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => '9VPUIIYpYm',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dannie Volkman',
                'email' => 'ada38@example.com',
            'mobile' => '(406) 835-4893',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => '0q4MgFe93F',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sydnee Kassulke',
                'email' => 'wboyer@example.org',
            'mobile' => '(630) 231-8538',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => 's3kUbCwv8N',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Elsie Murray DDS',
                'email' => 'imaggio@example.org',
                'mobile' => '+1-215-491-9163',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => '1inDwId32J',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Carmelo Leannon',
                'email' => 'little.cyril@example.com',
                'mobile' => '+1-361-317-1523',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => 'pq5a4R2LbZ',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Prof. Pascale Beahan',
                'email' => 'sidney33@example.com',
                'mobile' => '1-947-571-1988',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => 'vNdyIlmFBz',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Hollie Schaefer',
                'email' => 'oran00@example.org',
                'mobile' => '+1.870.895.5703',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => 'HvtXjiR37x',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Brandyn Grant',
                'email' => 'maverick69@example.org',
                'mobile' => '972-584-2869',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => 'NMcDBoTuvx',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Lyric Mueller III',
                'email' => 'leatha42@example.net',
                'mobile' => '1-856-319-4439',
                'profile_pic' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 0,
                'email_verified_at' => '2023-05-04 17:53:10',
                'remember_token' => '6VK12oVtrJ',
                'created_at' => '2023-05-04 17:53:10',
                'updated_at' => '2023-05-04 17:53:10',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Fat Brad',
                'email' => 'bradley@gmail.com',
                'mobile' => '0682355566',
                'profile_pic' => NULL,
                'password' => '$2y$10$oNVOGjvr3KZpV2Z2XC0d4.B7YU8eaMI7tfT0feQTyIiUNPgnrNH1G',
                'role' => 0,
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-04 17:54:36',
                'updated_at' => '2023-05-04 17:54:36',
            ),
        ));
        
        
    }
}