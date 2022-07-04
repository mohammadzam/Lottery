<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
    public function add($num){
        for($i = 0; $i < $num; $i++){
            DB::table('users')->insert([
                'name' => 'added-'.Str::random(4),
                'email' => 'added-'.Str::random(4).'@verkio.com',
                'password' => Hash::make('password'),
                'is_winner' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
