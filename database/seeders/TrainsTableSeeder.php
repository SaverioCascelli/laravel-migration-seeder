<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $new_train = new Train();

            $new_train->company = $faker->company(10);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->date();
            $new_train->arrival_time = $faker->date();
            $new_train->train_id = $faker->randomNumber(5, false);
            $new_train->train_coach = $faker->randomNumber(2, false);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();

            $new_train->save();
        }
    }
}
