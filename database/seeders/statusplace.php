<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statusplace extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('statusplases')->insert([
        ['title'=>'Свободен', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Занятый', 'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
