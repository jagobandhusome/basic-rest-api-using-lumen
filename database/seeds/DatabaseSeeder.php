<?php

use Illuminate\Database\Seeder;
//use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('UsersTableSeeder');
        $faker = Faker\Factory::create();

        for( $i = 0; $i < 10; $i++ ) {
        	DB::table('books')->insert([
	            'title' => $faker->title,
	            'author' => $faker->name,
	            'isbn' => $faker->isbn10,
	        ]);
        }
    }
}
