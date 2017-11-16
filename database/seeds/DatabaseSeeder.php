<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    protected $tables = [
        'users',
        'clients',
        'countries',
        'courses',
        'promotions',
        'testimonials',

    ];

    protected $seeders = [
        ProjectSeeder::class,
        PhotoSeeder::class,
    ];

    private function truncateDatabase()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($this->tables as $table) {
            \DB::table($table)->truncate();
        }
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    public function run()
    {
        Model::unguard();
//         $this->call(UsersTableSeeder::class);
         if(\DB::connection()->getName() === 'mysql'){
             $this->truncateDatabase();
         }
//        foreach($this->seeders as $seeder){
//            $this->call($seeder);
//        }
        // $this->call(ProjectSeeder::class);
        Model::reguard();
    }


}
