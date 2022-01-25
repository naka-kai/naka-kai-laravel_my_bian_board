<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostWantedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_wanted')->insert([
            [
                'post_id' => '1',
                'wanted_id' => '1'
            ],
            [
                'post_id' => '1',
                'wanted_id' => '2'
            ],
            [
                'post_id' => '1',
                'wanted_id' => '3'
            ],
            [
                'post_id' => '2',
                'wanted_id' => '2'
            ],
            [
                'post_id' => '2',
                'wanted_id' => '3'
            ],
            [
                'post_id' => '3',
                'wanted_id' => '1'
            ],
            [
                'post_id' => '4',
                'wanted_id' => '2'
            ],
        ]);
    }
}
