<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin 
            [
                'name' => 'Simone Philips',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin789'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //User 
            [
                'name' => 'John doe',
                'email' => 'user@gmail.com',
                'password' => Hash::make('admin789'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
