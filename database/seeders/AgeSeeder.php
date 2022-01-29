<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ages')->insert([
            ['age' => '10代(18歳以上)'],
            ['age' => '20代'],
            ['age' => '30代'],
            ['age' => '40代'],
            ['age' => '50歳以上'],
        ]);
    }
}
