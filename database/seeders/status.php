<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class status extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('statuses')->insert([
        ['title'=>'В процессе', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Незабронированный', 'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
