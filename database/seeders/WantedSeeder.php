<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WantedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('wanteds')->insert([
            ['wanted' => '友達募集'],
            ['wanted' => '恋人募集'],
            ['wanted' => '遠距離可'],
        ]);
    }
}
