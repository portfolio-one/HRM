<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id'=>1,
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'role_id'=>2,
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'role_id'=>3,
            'email'=>'employee@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
