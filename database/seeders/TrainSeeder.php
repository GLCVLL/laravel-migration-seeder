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
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->azienda = $faker->company;
            $train->stazione_partenza = $faker->city;
            $train->stazione_arrivo = $faker->city;
            $train->orario_partenza = $faker->time('H:i:s');
            $train->orario_arrivo = $faker->time('H:i:s');
            $train->codice_treno = $faker->unique()->ean8();
            $train->numero_carrozze = $faker->numberBetween(1, 12);
            $train->in_orario = $faker->boolean(90); 
            $train->cancellato = $faker->boolean(10); 
            $train->save();
        }
    }
}
