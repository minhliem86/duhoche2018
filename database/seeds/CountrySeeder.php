<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CountrySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		for($i = 1; $i<=5 ; $i++){
			\DB::table('countries')->insert([
				'title' => $faker->name,
				'description' => $faker->paragraph,
				'img_url' => $faker->imageUrl('480','480','cats'),
				'status' => 1,
				'order' => $i,
			]);
		}
	}

}
