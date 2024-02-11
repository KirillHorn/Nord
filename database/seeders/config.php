<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class config extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('configs')->insert([
        ['CPU'=>'Intel Core i5-8400 2.8 GHz', 'RAM' => '16 Gb', 'card' => 'Nvidia GeForce GTX 1050 Ti', 'monitor' => '60 GHz' ,'keyboard' => 'Bloody', 'mouse' => 'Logitech G102', 'headphones' => 'Bloody', 'created_at'=>$date, 'updated_at'=>$date],
        ['CPU'=>'Intel Core i5-8400 2.80 GHz', 'RAM' => '16 Gb', 'card' => 'Nvidia GeForce GTX 1070', 'monitor' => '140 GHz' ,'keyboard' => 'механическая Bloody', 'mouse' => 'Logitech G102', 'headphones' => 'Dark project', 'created_at'=>$date, 'updated_at'=>$date],
        ['CPU'=>'Intel Core i5-8400 2.8 GHz', 'RAM' => '32 Gb', 'card' => 'Nvidia GeForce RTX 2060', 'monitor' => '240 GHz' ,'keyboard' => 'механическая Bloody', 'mouse' => 'Logitech G102', 'headphones' => 'HyperX', 'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
