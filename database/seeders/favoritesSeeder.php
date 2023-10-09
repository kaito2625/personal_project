<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\favorites;

class favoritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2; $i <= 20; $i++){
            favorites::create([
                'user_id' => 1,
                'tweet_id' => $i
            ]);
        }
    }
}
