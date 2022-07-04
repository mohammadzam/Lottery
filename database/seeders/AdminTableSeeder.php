<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => "MohammadZam",
                'email' => "mohammadalizamP9@gmail.com",
                'password' =>  Hash::make('password'),
            ],
            [
                'name' => "Verkio",
                'email' => "admin@verkio.com",
                'password' => Hash::make('password'),

            ]
        ];

        foreach ($admins as $admin){
            Admin::create($admin);
        }

    }
}
