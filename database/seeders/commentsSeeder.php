<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Comment;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++){
            Comment::class([
                'user_id' => 1,
                'tweet_id' => $i,
                'text' => 'これはテストコメント' .$i,
                'deleted_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
