<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $companies = ['Alitalia', 'Italo'];
        for($i = 0; $i < 10; $i++)
        {
            $newTrain = new Train();
            $newTrain->company = $companies[rand(0, 1)];
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->date('Y_m_d');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numerify('train-####');
            $newTrain->number_carriages = $faker->numberBetween(1, 20);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
