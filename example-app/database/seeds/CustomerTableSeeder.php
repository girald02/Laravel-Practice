<?php

use Illuminate\Database\Seeder;
use App\Customer;


class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

       for ($i=0; $i < 100 ; $i++) { 
        	Customer::create([
        		"name"=>$faker->name,
        		"email"=>$faker->email,
        		"phone"=>$faker->phoneNumber,
        		"address"=>$faker->address,
        		"country"=>$faker->country,
        		"rating"=>$faker->randomDigit,
        	]);
        }
    }
}
