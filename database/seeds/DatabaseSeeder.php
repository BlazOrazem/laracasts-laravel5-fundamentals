<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Database tables.
	 *
	 * @var array
	 */
	private $tables = [
		'articles',
		'users',
		'tags',
		'article_tag',
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->cleanDatabase();
		$this->command->info('Database truncated.');

		$this->call('UserTableSeeder');
		$this->command->info('Users table seeded.');

		$this->call('ArticleTableSeeder');
		$this->command->info('Articles table seeded.');

//		$this->call('TagTableSeeder');
//		$this->command->info('Tags table seeded.');

//		$this->call('ArticleTagTableSeeder');
//		$this->command->info('Article-Tag pivot table seeded.');
	}

	/**
	 * Truncate tables.
	 */
	public function cleanDatabase()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		foreach($this->tables as $tableName)
		{
			DB::table($tableName)->truncate();
		}

		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
