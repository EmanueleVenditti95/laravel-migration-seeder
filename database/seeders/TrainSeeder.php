<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<1000 ; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->randomElement(['Italo','Trenitalia','Frecciarossa']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeThisDecade();
            $new_train->arrival_time = $faker->dateTimeThisDecade();
            $new_train->train_code = $faker->randomNumber(5, false);
            $new_train->carriages_number = $faker->randomNumber(2, true);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
