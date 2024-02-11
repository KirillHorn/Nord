<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tariff extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('tariffs')->insert([
        ['title_tariff'=>'Стандарт', 'cost' => 100,  'created_at'=>$date, 'updated_at'=>$date],
        ['title_tariff'=>'Люкс', 'cost' => 130,  'created_at'=>$date, 'updated_at'=>$date],
        ['title_tariff'=>'Премиум', 'cost' => 170,  'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
