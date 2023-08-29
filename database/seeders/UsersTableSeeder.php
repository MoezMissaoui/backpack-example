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
                'id' => 3,
                'name' => 'Riadh',
                'email' => 'missaouimoez17@gmail.com',
                'email_verified_at' => NULL,
                'password' => 'missaouimoez17@gmail.com',
                'remember_token' => NULL,
                'created_at' => '2023-08-28 12:36:29',
                'updated_at' => '2023-08-28 12:36:29',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'Moez',
                'email' => 'moez@dev.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qqyarS5cMq0W9MEGl9jt.e4kTqhgCzhcyR5tuJ1/9zM.RzA1pxo5m',
                'remember_token' => 'gMC50eU9QAmIBqtiBCgp0OcifnziMhQ7M7tPQvVLTOjLN9HxVYOJcKvR5gD0',
                'created_at' => '2023-08-28 11:38:30',
                'updated_at' => '2023-08-28 11:38:30',
            ),
        ));
        
        
    }
}