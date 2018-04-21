<?php

use Illuminate\Database\Seeder;

class AirportsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
        App\Flights::truncate();

        $faker = \Faker\Factory::create();
        $airportIds = DB::table('airports')->pluck('id')->toArray();
        $flightNames = ['American Airlines','Air Canada','Alaska Airlines','British Airways','Delta Air Lines','KLM','Lufthansa','Provincial Airlines','United Airlines','WestJet','Eastern Airways','Easyjet','Ava Air','EasterJet','Eurostar'];
        //dd($airportIds);
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {
            App\Flights::create([
                'name' => $faker->randomElement($flightNames),
                'number' => $faker->unique()->userName,
                'from' =>$faker->randomElement($airportIds),
                'to' =>$faker->randomElement($airportIds),
                
            ]);
        }
    }
}
