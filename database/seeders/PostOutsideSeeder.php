<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostOutsideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_outsides')->insert([
            [
                'post_id' => '1',
                'outside_id' => '2'
            ],
            [
                'post_id' => '1',
                'outside_id' => '3'
            ],
            [
                'post_id' => '2',
                'outside_id' => '1'
            ],
            [
                'post_id' => '2',
                'outside_id' => '2'
            ],
            [
                'post_id' => '3',
                'outside_id' => '1'
            ],
            [
                'post_id' => '4',
                'outside_id' => '3'
            ],
        ]);
    }
}
