<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
            'name' => 'Admin',
            'email' => 'rezamuhammad890@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
            'remember_token' => Str::random(10),
            'id_outlet' => 1,
            'role' => 'admin'
            ],
            [
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('owner'), // password
            'remember_token' => Str::random(10),
            'id_outlet' => 1,
            'role' => 'owner'
            ],
            [
            'name' => 'Kasir',
            'email' => 'kasir@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('kasir'), // password
            'remember_token' => Str::random(10),
            'id_outlet' => 1,
            'role' => 'kasir'
            ]
        ];      
        DB::table('tb_user')->insert($users);
    }
}
