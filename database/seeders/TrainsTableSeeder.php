<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->time($format = 'H:i:s', $max = 'now'),
                'orario_di_arrivo' => $faker->time($format = 'H:i:s', $max = 'now'),
                'codice_treno' => $faker->unique()->ean8,
                'numero_carrozze' => $faker->numberBetween($min = 1, $max = 10),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
