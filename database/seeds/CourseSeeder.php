<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CourseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		for($i = 1; $i<=5 ; $i++){
			\DB::table('courses')->insert([
				'title' => $faker->name,
				'description' => $faker->paragraph,
				'content' => $faker->paragraph,
				'code' => $faker->countryCode,
				'time' => $faker->dateTime(),
				'schedule' => $faker->randomHtml(2,3),
				'country_id' => $i,
				'age' => $faker->numberBetween(10,20),
				'img_url' => $faker->imageUrl('480','480','cats'),
				'status' => 1,
				'order' => $i,
			]);
		}
	}

}
