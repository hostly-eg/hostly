<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'id' => 1,
            'name' => 'Abdelrahman',
            'email' => 'abdo@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'token' => Str::random(80),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'ahmed',
            'email' => 'abdulrahmansalem524@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'customer',
            'token' => Str::random(80),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('customers')->insert([
            'id' => 1,
            'user_id' => 2,
            'phone' => '01092642498',
            'address' => 'Ayyat - Giza',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
