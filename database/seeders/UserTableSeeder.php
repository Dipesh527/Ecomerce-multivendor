<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'full_name' => 'dipesh admin',
                'username' => 'admin',
                'email' => 'admindipesh@gmail.com',
                'password' => Hash::make('1111'),
                'role' => 'admin',
                'status' =>'active'

            ],
            [
                'full_name' => 'dipesh vendor',
                'username' => 'vendor',
                'email' => 'vendordipesh@gmail.com',
                'password' => Hash::make('1111'),
                'role' => 'vendor',
                'status' =>'active'
            ],
            [
                'full_name' => 'dipesh user',
                'username' => 'user',
                'email' => 'userdipesh@gmail.com',
                'password' => Hash::make('1111'),
                'role' => 'admin',
                'status' =>'active'
            ]
   


        ]);
    }
}
