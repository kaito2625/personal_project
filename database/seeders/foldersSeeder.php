<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Folder;

class foldersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $titles = ['プライベート', '仕事'];
        
        
        foreach ($titles as $title){
            DB::table('folders')->insert([
                'user_id' => '1',
                'title' => $title,
                'deleted_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
      }
    }

