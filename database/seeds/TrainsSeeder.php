<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    
        for ($i=0; $i < 20; $i++) {
          $train = new Train();
          // Azienda
          $train->company = $faker->company();
          // Stazione di partenza
          $train->departure_station = $faker->city();
          // Stazione di arrivo
          $train->arrival_station = $faker->city();
          // Data di partenza
          $train->departure_date = $faker->dateTimeThisMonth();
          // Orario di partenza
          $train->departure_time = $faker->time();
          // Data di arrivo
          $train->arrival_date = $faker->dateTimeThisMonth();
          // Orario di arrivo
          $train->arrival_time = $faker->time();
          // Codice Treno
          $train->train_number = $faker->unique()->randomNumber(5, true);
          // Numero Carrozze
          $train->wagon = $faker->randomNumber(2, false);
          // In orario
          $train->on_time = $faker->boolean();
          // Cancellato
          $train->cancelled = $faker->boolean();
          // timestamp
      }   
    }
}
