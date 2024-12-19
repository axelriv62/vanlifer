<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder {
    public function run(): void {
        $voyages = [
            [
                'titre' => "Notre voyage en Norvège (Imaginé par l'équipe MMI)",
                'description' => "Exploration des paysages et des cultures vibrantes de la Norvège.",
                'resume' => "Exploration des paysages et des cultures vibrantes de la Norvège.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/copenhague.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Les grandes villes du nord de l'Europe",
                'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.",
                'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/Amsterdam1.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en Europe de l'Est",
                'description' => "Découverte des merveilles de l'Europe de l'Est.",
                'resume' => "Découverte des merveilles de l'Europe de l'Est.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/Anvers1.jpg",
                'user_id' => 1,
            ],
        ];

        foreach ($voyages as $voyage) {
            Voyage::create($voyage);
        }
    }
}
