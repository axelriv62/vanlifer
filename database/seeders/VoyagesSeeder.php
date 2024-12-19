<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder {
    public function run(): void {
        $voyages = [
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
            [
                'titre' => "Notre voyage en Norvège",
                'description' => "Exploration des paysages et des cultures vibrantes de la Norvège.",
                'resume' => "Exploration des paysages et des cultures vibrantes de la Norvège.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/copenhague.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en France",
                'description' => "Découverte des villes emblématiques de France.",
                'resume' => "Découverte des villes emblématiques de France.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/france.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en Espagne",
                'description' => "Exploration des villes historiques d'Espagne.",
                'resume' => "Exploration des villes historiques d'Espagne.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/spain.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en Italie",
                'description' => "Visite des villes culturelles d'Italie.",
                'resume' => "Visite des villes culturelles d'Italie.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/italy.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en Allemagne",
                'description' => "Découverte des villes modernes d'Allemagne.",
                'resume' => "Découverte des villes modernes d'Allemagne.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/germany.jpg",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en Grèce",
                'description' => "Exploration des villes historiques de Grèce.",
                'resume' => "Exploration des villes historiques de Grèce.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/greece.jpg",
                'user_id' => 1,
            ],
        ];

        foreach ($voyages as $voyage) {
            Voyage::create($voyage);
        }
    }
}
