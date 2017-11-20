<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;


class PromotionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		for($i = 1; $i<=5 ; $i++){
			DB::table('promotions')->insert([
				'title' => $faker->sentence,
				'description' => $faker->paragraph,
				'img_url' => $faker->imageUrl('480','480','cats'),
				'status' => 1,
				'order' => $i,
			]);
		}
	}

}
