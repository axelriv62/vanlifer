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
                'titre' => "Voyage en Asie",
                'description' => "Découverte des merveilles de l'Asie. Un voyage à travers les cultures et les paysages diversifiés.",
                'resume' => "Découverte des merveilles de l'Asie.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/asie.png",
                'user_id' => 1,
            ],
            [
                'titre' => "Aventure en Amérique du Sud",
                'description' => "Exploration des paysages et des cultures vibrantes de l'Amérique du Sud.",
                'resume' => "Exploration des paysages et des cultures vibrantes de l'Amérique du Sud.",
                'en_ligne' => true,
                'visuel' => env('APP_URL')."/storage/user1/amerique-sud.png",
                'user_id' => 1,
            ],
        ];

        foreach ($voyages as $voyage) {
            Voyage::create($voyage);
        }
    }
}
