<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_sex')->insert([
            [
                'post_id' => '1',
                'sex_id' => '2'
            ],
            [
                'post_id' => '1',
                'sex_id' => '3'
            ],
            [
                'post_id' => '1',
                'sex_id' => '4'
            ],
            [
                'post_id' => '1',
                'sex_id' => '5'
            ],

            [
                'post_id' => '2',
                'sex_id' => '1'
            ],
            [
                'post_id' => '2',
                'sex_id' => '2'
            ],
            [
                'post_id' => '2',
                'sex_id' => '5'
            ],
            [
                'post_id' => '2',
                'sex_id' => '6'
            ],

            [
                'post_id' => '3',
                'sex_id' => '1'
            ],
            [
                'post_id' => '3',
                'sex_id' => '6'
            ],

            [
                'post_id' => '4',
                'sex_id' => '3'
            ],
            [
                'post_id' => '4',
                'sex_id' => '4'
            ],
        ]);
    }
}
