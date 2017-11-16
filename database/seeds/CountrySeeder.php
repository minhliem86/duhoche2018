<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;


class CountrySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
		DB::table('countries')->truncate();
		
		$faker = Faker::create();
		for($i = 1; $i<=5 ; $i++){
			DB::table('countries')->insert([
				'name' => $faker->country,
				'status' => 1,
				'order' => $i,
			]);
		}
	}

}
