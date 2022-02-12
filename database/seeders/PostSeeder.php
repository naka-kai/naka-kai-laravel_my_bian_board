<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('password1'),
                'content' => '内容1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'タイトル2',
                'name' => 'あきら',
                'age_id' => '3',
                'prefecture_id' => '12',
                'email' => 'test2@test.com',
                'password' => Hash::make('password2'),
                'content' => '内容2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'タイトル3',
                'name' => '花子',
                'age_id' => '2',
                'prefecture_id' => '3',
                'email' => 'test3@test.com',
                'password' => Hash::make('password3'),
                'content' => '内容3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'タイトル4',
                'name' => '太郎',
                'age_id' => '2',
                'prefecture_id' => '3',
                'email' => 'test4@test.com',
                'password' => Hash::make('password4'),
                'content' => '内容4',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
