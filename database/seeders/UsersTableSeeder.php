<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        //admin
        [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'admin',
        ],

        //editor
        [
            'name' => 'Editor',
            'username' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('0000'),
            'role' => 'editor',
        ],

        //content manager
        [
            
            'name' => 'ContentManager',
            'username' => 'cmanager',
            'email' => 'cmanager@gmail.com',
            'password' => Hash::make('1111'),
            'role' => 'cmanager',
        ]
        ]);
    }
}
