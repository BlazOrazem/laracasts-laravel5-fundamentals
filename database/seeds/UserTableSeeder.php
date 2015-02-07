<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $items = [
            ['id' => '1', 'name' => 'John Doe', 'email' => 'john@mailinator.com', 'password' =>'$2y$10$5QYFCfkd5lSOxX20i0w2p.hwSupOP.YcJxRRoL8073FzXQXADTDZy', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '2', 'name' => 'Jane Doe', 'email' => 'jane@mailinator.com', 'password' =>'$2y$10$5QYFCfkd5lSOxX20i0w2p.hwSupOP.YcJxRRoL8073FzXQXADTDZy', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '3', 'name' => 'Ivan Doe', 'email' => 'ivan@mailinator.com', 'password' =>'$2y$10$5QYFCfkd5lSOxX20i0w2p.hwSupOP.YcJxRRoL8073FzXQXADTDZy', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];

        DB::table('users')->insert($items);
    }

}