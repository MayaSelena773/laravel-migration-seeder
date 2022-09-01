<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker; 

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $vehicles = [
            'Autobus',
            'Treno',
            'Nave',
            'Aereo'
        ];

        for($i = 0; $i < 10; $i++){
            $new_trip = new trip();
            $new_trip->name = 'Viaggio a ' . $faker->city();
            $new_trip->destination = $faker->city();
            $new_trip->start_date = $faker->date();
            $new_trip->days = rand(1, 20);
            $new_trip->price = $faker->randomFloat(2, 150, 99999);
            $new_trip->vehicle = $faker->randomElement($vehicles);
            $new_trip->description = $faker->paragraphs(3, true); 
            $new_trip->save();
        }

    }
}
