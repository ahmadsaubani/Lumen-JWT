<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Seyi',
                'email' => 'seyii@seyi.com',
                'password' => 'somerandompassword'
            ]
        );

    }

}