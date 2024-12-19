<?php

namespace Database\Seeders;

use App\Models\Avis;
use App\Models\User;
use App\Models\Voyage;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AvisSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $faker = Factory::create('fr_FR');

        $voyages = Voyage::all();
        $userNames = ['axel', 'bylel', 'quentin', 'loup', 'lynoa'];
        $userIds = User::whereIn('name', $userNames)->pluck('id', 'name')->toArray();

        $specifiedComments = [
            "Merci d'avoir partagé votre voyage.",
            "Cela donne envie.",
            "Avez-vous visité ce musée ?",
            "Les paysages sont magnifiques, bravo pour les photos !",
            "Votre aventure en van est inspirante, continuez comme ça !"
        ];

        foreach ($voyages as $voyage) {
            if ($voyage->id == 1) {
                foreach ($specifiedComments as $index => $comment) {
                    Avis::create([
                        'contenu' => $comment,
                        'created_at' => $faker->dateTimeInInterval('-3 months', '+ 90 days', date_default_timezone_get()),
                        'updated_at' => $faker->dateTimeInInterval('-3 months', '+ 90 days', date_default_timezone_get()),
                        'user_id' => $userIds[$userNames[$index]],
                        'voyage_id' => $voyage->id,
                    ]);
                }
            } else {
                for ($i = 0; $i < 5; $i++) {
                    Avis::create([
                        'contenu' => $faker->sentence(10),
                        'created_at' => $faker->dateTimeInInterval('-3 months', '+ 90 days', date_default_timezone_get()),
                        'updated_at' => $faker->dateTimeInInterval('-3 months', '+ 90 days', date_default_timezone_get()),
                        'user_id' => $faker->randomElement($userIds),
                        'voyage_id' => $voyage->id,
                    ]);
                }
            }
        }
    }
}
