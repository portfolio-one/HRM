<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'slug'=>'superadmin',
            'name'=>'Super Admin',
        ]);
        DB::table('roles')->insert([
            'slug'=>'admin',
            'name'=>'Admin',
        ]);
        DB::table('roles')->insert([
            'slug'=>'employee',
            'name'=>'Employee',
        ]);
    }
}
