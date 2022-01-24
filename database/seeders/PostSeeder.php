<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
                'title' => 'タイトル1',
                'name' => 'ゆうき',
                'age_id' => '2',
                'prefecture_id' => '3',
                'email' => 'test1@test.com',
                'content' => '内容1',
            ],
            [
                'title' => 'タイトル2',
                'name' => 'あきら',
                'age_id' => '3',
                'prefecture_id' => '12',
                'email' => 'test2@test.com',
                'content' => '内容2',
            ],
            [
                'title' => 'タイトル3',
                'name' => '花子',
                'age_id' => '2',
                'prefecture_id' => '3',
                'email' => 'test3@test.com',
                'content' => '内容3',
            ],
            [
                'title' => 'タイトル4',
                'name' => '太郎',
                'age_id' => '2',
                'prefecture_id' => '3',
                'email' => 'test4@test.com',
                'content' => '内容4',
            ],

        ]);
    }
}
