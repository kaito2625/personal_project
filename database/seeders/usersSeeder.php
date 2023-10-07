<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\users;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('users')->insert([
                'name' => 'user' ,
                'profile_image' => 'https://placehold.jp/50x50.png',
                'email' => 'test' .'@gmail.com',
                'password' => Hash::make('12345678'),
                'remember_token' => str::random(20),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
    }
}
