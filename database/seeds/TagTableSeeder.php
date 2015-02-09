<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder {

    public function run()
    {
        $items = [
            ['id' => 1, 'name' => "personal", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => "work", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => "bussiness", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => "customer", 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];

        DB::table('tags')->insert($items);
    }

}