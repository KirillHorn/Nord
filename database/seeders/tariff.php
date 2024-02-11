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
        ['title_tariff'=>'Стандарт', 'cost' => 100, 'config_id' => 1,    'created_at'=>$date, 'updated_at'=>$date],
        ['title_tariff'=>'Люкс', 'cost' => 130,'config_id' => 2,  'created_at'=>$date, 'updated_at'=>$date],
        ['title_tariff'=>'Премиум', 'cost' => 170,'config_id' => (3),  'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
