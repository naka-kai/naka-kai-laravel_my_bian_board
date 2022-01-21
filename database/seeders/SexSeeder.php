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
            [ 'sex' => 'フェム' ],
            [ 'sex' => '中性' ],
            [ 'sex' => 'ボイ' ],
            [ 'sex' => 'タチ' ],
            [ 'sex' => 'リバ' ],
            [ 'sex' => 'ネコ' ],
        ]);
    }
}
