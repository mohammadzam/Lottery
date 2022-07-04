<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name' => "user1",
                'email' => "user1@verkio.com",
                'password' => Hash::make('password'),

            ], [
                'name' => "user2",
                'email' => "user2@verkio.com",
                'password' => Hash::make('password'),

            ], [
                'name' => "user3",
                'email' => "user3@verkio.com",
                'password' => Hash::make('password'),

            ], [
                'name' => "user4",
                'email' => "user4@verkio.com",
                'password' => Hash::make('password'),

            ], [
                'name' => "user5",
                'email' => "user5@verkio.com",
                'password' => Hash::make('password'),

            ], [
                'name' => "user6",
                'email' => "user6@verkio.com",
                'password' => Hash::make('password'),

            ], [
                'name' => "user7",
                'email' => "user7@verkio.com",
                'password' => Hash::make('password'),

            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
