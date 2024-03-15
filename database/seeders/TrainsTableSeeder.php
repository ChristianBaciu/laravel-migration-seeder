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
    public function run(Faker $Faker): void
    {
        for($i = 0; $i < 100; $i++ ){
            $newTrain = new Train();

             $new_Train_object->Azienda = $faker->
             $new_Train_object->Stazione_di_partenza = $faker->
             $new_Train_object->Stazione_di_arrivo = $faker->
             $new_Train_object->Orario_di_partenza = $faker->
             $new_Train_object->Orario_di_arrivo = $faker->
             $new_Train_object->Codice_Treno = $faker->
             $new_Train_object->In_orario = $faker->
             $new_Train_object->Cancellato = $faker->



            $newTrain-> save();
        }
    }
}
