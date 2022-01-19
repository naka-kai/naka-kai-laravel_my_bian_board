<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostInsideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_insides')->insert([
            [
                'post_id' => '1',
                'inside_id' => '1'
            ],
            [
                'post_id' => '1',
                'inside_id' => '2'
            ],
            [
                'post_id' => '2',
                'inside_id' => '2'
            ],
            [
                'post_id' => '2',
                'inside_id' => '3'
            ],
            [
                'post_id' => '3',
                'inside_id' => '1'
            ],
            [
                'post_id' => '4',
                'inside_id' => '3'
            ],
        ]);
    }
}
