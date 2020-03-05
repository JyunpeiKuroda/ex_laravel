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
        DB::table('Posts')->insert([
            ['body' => '内容1'],
            ['body' => '内容2'],
            ['body' => '内容3'],
        ]);
    }
}
