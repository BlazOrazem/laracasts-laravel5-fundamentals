<?php

use Illuminate\Database\Seeder;

class ArticleTagTableSeeder extends Seeder {

    public function run()
    {
        $items = [
            ['article_id' => 1, 'tag_id' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 1, 'tag_id' => '2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 1, 'tag_id' => '3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 1, 'tag_id' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['article_id' => 3, 'tag_id' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 3, 'tag_id' => '3', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['article_id' => 4, 'tag_id' => '2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 4, 'tag_id' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['article_id' => 5, 'tag_id' => '2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 5, 'tag_id' => '3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['article_id' => 5, 'tag_id' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];

        DB::table('article_tag')->insert($items);
    }

}