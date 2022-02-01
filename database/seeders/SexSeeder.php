<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sexes')->insert([
            [
                'sex' => 'フェム',
                'inputName' => 'fem'
            ],
            [
                'sex' => '中性',
                'inputName' => 'neutral'
            ],
            [
                'sex' => 'ボイ',
                'inputName' => 'boy'
            ],
            [
                'sex' => 'タチ',
                'inputName' => 'top'
            ],
            [
                'sex' => 'リバ',
                'inputName' => 'vers'
            ],
            [
                'sex' => 'ネコ',
                'inputName' => 'btm'
            ],
        ]);
    }
}
