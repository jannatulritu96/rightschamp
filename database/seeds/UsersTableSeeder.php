<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Fardin Rehman',
            'slug_name' => 'fardin-rehman',
            'phone_no' => '+8801XXXXXXXXX',
            'email' => 'admin@demo.com',
            'address' => 'Panthopath,dhaka',
            'password' => bcrypt('admin@123'),
            'status' => 'Active'

        ]);
    }
}
