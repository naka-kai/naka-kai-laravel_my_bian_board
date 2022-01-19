<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->insert([
            ['area' => '北海道'],
            ['area' => '東北地方'],
            ['area' => '関東地方'],
            ['area' => '中部地方'],
            ['area' => '近畿地方'],
            ['area' => '中国地方'],
            ['area' => '四国地方'],
            ['area' => '九州地方'],
        ]);
    }
}
