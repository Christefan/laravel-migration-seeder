<?php

use App\Trains;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
class TrainsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $companies = [
            'Trenitalia',
            'Italo',
        ];

        for ($i=0; $i < 10; $i++) {
            $train = new Trains();
            $train -> company = $companies[rand(0, count($companies) - 1)];
            $train -> departure_station = $faker -> state();
            $train -> arrival_station = $faker -> state();
            $train -> time_departure = $faker -> time();
            $train -> time_arrival = $faker -> time();
            $train -> train_code = $faker -> regexify('[A-Z]{4}[0-9]{4}');
            $train -> wagons_number = $faker -> numberBetween(3, 10);
            $train -> on_time = $faker -> boolean();
            $train -> cancelled = $faker -> boolean();
            $train -> save();
        }
    }
}
