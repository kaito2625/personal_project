<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class tasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,2) as $num) {
            DB::table('tasks')->insert([
                'folder_id'=>$num,
                'title'=>"サンプルタスク {$num}",
                'status'=>$num,
                'due_date'=>Carbon::now()->addDay($num),
                'deleted_at'=>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
