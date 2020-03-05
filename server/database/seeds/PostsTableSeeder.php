<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // articlesテーブルにデータをinsert
        DB::table('articles')->insert([
            ['body' => '内容1の文章'],
            ['body' => '内容2の文章'],
            ['body' => '内容3の文章'],
        ]);
    }
}
