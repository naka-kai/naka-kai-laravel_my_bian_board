<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutsideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('outsides')->insert([
            ['outside' => 'フェム'],
            ['outside' => '中性'],
            ['outside' => 'ボイ'],
        ]);
    }
}
