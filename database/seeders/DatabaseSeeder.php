<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => "User 1",
                'email' => "User1@gmail.com",
                'role' => 'user1',
                'password' => Hash::make('123456'),
            ],
        );
        DB::table('users')->insert(
            [
                'name' => "User 2",
                'email' => "User2@gmail.com",
                'role' => 'user2',
                'password' => Hash::make('123456'),
            ],
        );
        DB::table('users')->insert(
            [
                'name' => "User 3",
                'email' => "User3@gmail.com",
                'role' => 'user3',
                'password' => Hash::make('123456'),
            ],
        );
        DB::table('users')->insert(
            [
                'name' => "User 4",
                'email' => "User4@gmail.com",
                'role' => 'user4',
                'password' => Hash::make('123456'),
            ],
        );
        DB::table('users')->insert(
            [
                'name' => "User 5",
                'email' => "User5@gmail.com",
                'role' => 'user5',
                'password' => Hash::make('123456'),
            ],
        );
        DB::table('users')->insert(
            [
                'name' => "User 6",
                'email' => "User6@gmail.com",
                'role' => 'user6',
                'password' => Hash::make('123456'),
            ],
        );
    }
}
