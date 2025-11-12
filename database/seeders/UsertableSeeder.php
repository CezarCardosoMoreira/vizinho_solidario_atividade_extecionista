<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create multiple users using
        DB ::table('users')->insert([
            [
                'name' => 'cezar',
                'email' => 'cezar@gmail.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => 'juliana',
                'email' => 'juliana@gmail.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'brayan',
                'email' => 'brayan@gmail.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'silva',
                'email' => 'silva@gmail.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'diego',
                'email' => 'diego@gmail.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gabriel',
                'email' => 'gabriel@gmail.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
