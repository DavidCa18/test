<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Str;
use Hash;

use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User',
            'surnames' => 'Default',
            'email' => 'admin@gmail.com',
            'address' => 'Address Default',
            'birth' => Carbon::create('1990', '06', '10'),
            'password' => Hash::make('password')
        ]);
    }
}