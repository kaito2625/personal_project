<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\tweets;

class tweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
        tweets::create([
        'user_id' => $i,
        'text'       => 'これはテスト投稿' .$i,
        'deleted_at' => now(),
        'created_at' => now(),
        'updated_at' => now()
        ]);
        }
    }
}
