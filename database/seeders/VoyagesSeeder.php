<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {


        Voyage::create([
            'titre' => "Les grandes villes du nord de l'Europe proposé",
            'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails.... ",
            'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
            'continent' => "Europe",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/voyages/europe-nord.jpg",
            'user_id' => 1,
        ]);

    }
}
