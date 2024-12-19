<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $voyages = [
            [
                'titre' => "Les grandes villes du nord de l'Europe",
                'description' => "Quelques-unes des plus grandes villes du nord de l'Europe. J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite. Mais que vous, je ne peux m'en empêcher. Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
                'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe. J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite. Mais que vous, je ne peux m'en empêcher. Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/europe-nord.png",
                'user_id' => 1,
            ],
            [
                'titre' => "Voyage en Europe de l'Est",
                'description' => "Découverte des merveilles de l'Europe de l'Est. Un voyage à travers les cultures et les paysages diversifiés.",
                'resume' => "Découverte des merveilles de l'Europe de l'Est.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/europe-est.png",
                'user_id' => 1,
            ],
            [
                'titre' => "Notre voyage en Norvège",
                'description' => "Exploration des paysages et des cultures vibrantes de la Norvège.",
                'resume' => "Exploration des paysages et des cultures vibrantes de la Norvège.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/app/public/user1/norvege.jpg",
                'user_id' => 1,
            ],
        ];

        foreach ($voyages as $voyage) {
            Voyage::create($voyage);
        }
    }
}
