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
            $newTrain = new Train();
             $newTrain->azienda = $faker->company();
             $newTrain->stazione_di_partenza = $faker->randomElement(['Verona Porta Vescovo', 'Vicenza', 'Verona Porta Nuova']);
             $newTrain->stazione_di_arrivo = $faker->randomElement(['Treviso Centrale', 'Lonigo', 'S. Bonifacio']);
             // il parametro '-1 Day' prende la data di oggi togliendo un giorno
             // il parametro '+1 Day' prende la data di oggi aggiungendo un giorno
             // aggiungendo anche l'orario
             $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 Day', '+1 Day');
             $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-1 Day', '+1 Day');
             $newTrain->codice_treno = $faker->randomDigit();
             $newTrain->numero_carrozze = $faker->randomDigit();
             $newTrain->in_orario = $faker->boolean();
             $newTrain->cancellato = $faker->boolean();
            $newTrain->save();

            // 'orario_di_partenza' => $faker->time($format = 'H:i:s', $max = 'now'),

            // in questo caso non è importante l'ordine di max o format
            // $newTrain->orario_di_partenza = $faker->time(max:'now', format:'H:i:s');

        }
    }
}

