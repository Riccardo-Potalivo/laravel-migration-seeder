<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->sentence(3);
            $newTrain->station = $faker->sentence(3);
            $newTrain->departure_station = $faker->sentence(3);
            $newTrain->arrival_station = $faker->sentence(3);
            $newTrain->departure_time = $faker->randomElement(['2023-12-21', '2023-12-22', '2023-12-23']) . ' ' . $faker->time();
            $newTrain->arrival_time = $faker->randomElement(['2023-12-21', '2023-12-22', '2023-12-23']) . ' ' . $faker->time();
            $newTrain->train_code = $faker->randomNumber(6, true);
            $newTrain->carriage_number = $faker->numberBetween(0, 20);
            $newTrain->on_time = $faker->randomElement([true, false]);
            $newTrain->deleted = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
