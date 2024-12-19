<?php

namespace Database\Seeders;

use App\Models\Etape;
use Illuminate\Database\Seeder;

class EtapesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $etapes = [
            [
                'titre' => "Lens",
                'resume' => "Lens est une ville du nord de la France. Lens, ancienne cité minière",
                'description' => "Lens est une ville du nord de la France, située dans le département du Pas-de-Calais en région Hauts-de-France.",
                'debut' => "2024-11-17",
                'fin' => "2024-11-19",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Bruxelles",
                'resume' => "Bruxelles est la capitale de la Belgique. Bruxelles, sa grande place, son Manneken-Pis",
                'description' => "Bruxelles est la capitale de la Belgique, connue pour sa grande place et le Manneken-Pis.",
                'debut' => "2024-11-20",
                'fin' => "2024-11-22",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Anvers",
                'resume' => "Anvers est une ville de Belgique. Les diamants sont éternels...",
                'description' => "Anvers est une ville de Belgique, célèbre pour son commerce de diamants.",
                'debut' => "2024-11-23",
                'fin' => "2024-11-25",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Amsterdam",
                'resume' => "Amsterdam est la capitale des Pays-Bas. La ville de Van Gogh et des tulipes",
                'description' => "Amsterdam est la capitale des Pays-Bas, connue pour ses canaux, ses musées et ses tulipes.",
                'debut' => "2024-11-26",
                'fin' => "2024-11-28",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Hambourg",
                'resume' => "Hambourg est une ville d'Allemagne. Adossée à l'Alster",
                'description' => "Hambourg est une ville d'Allemagne, située près de l'Elbe et connue pour son port.",
                'debut' => "2024-11-29",
                'fin' => "2024-12-01",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Breme",
                'resume' => "Brème est une ville d'Allemagne. Le commerce maritime",
                'description' => "Brème est une ville d'Allemagne, connue pour son commerce maritime.",
                'debut' => "2024-12-02",
                'fin' => "2024-12-04",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Copenhague",
                'resume' => "Copenhague est la capitale du Danemark. La petite sirène",
                'description' => "Copenhague est la capitale du Danemark, célèbre pour la statue de la Petite Sirène.",
                'debut' => "2024-12-05",
                'fin' => "2024-12-07",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Oslo",
                'resume' => "Oslo est la capitale de la Norvège. Les fjords, ....",
                'description' => "Oslo est la capitale de la Norvège, connue pour ses fjords et ses espaces verts.",
                'debut' => "2024-12-08",
                'fin' => "2024-12-10",
                'voyage_id' => 1,
            ],
            [
                'titre' => "Prague",
                'resume' => "Prague est la capitale de la République tchèque.",
                'description' => "Prague est connue pour son château, son pont Charles et sa vieille ville.",
                'debut' => "2024-12-11",
                'fin' => "2024-12-13",
                'voyage_id' => 2,
            ],
            [
                'titre' => "Budapest",
                'resume' => "Budapest est la capitale de la Hongrie.",
                'description' => "Budapest est célèbre pour ses bains thermaux et son architecture.",
                'debut' => "2024-12-14",
                'fin' => "2024-12-16",
                'voyage_id' => 2,
            ],
            [
                'titre' => "Athènes",
                'resume' => "Athènes est la capitale de la Grèce.",
                'description' => "Athènes est connue pour ses monuments antiques comme le Parthénon.",
                'debut' => "2024-12-17",
                'fin' => "2024-12-19",
                'voyage_id' => 3,
            ],
            [
                'titre' => "Rome",
                'resume' => "Rome est la capitale de l'Italie.",
                'description' => "Rome est célèbre pour ses ruines antiques comme le Colisée et le Forum romain.",
                'debut' => "2024-12-20",
                'fin' => "2024-12-22",
                'voyage_id' => 3,
            ],
        ];

        foreach ($etapes as $etapeData) {
            $etape = new Etape();
            $etape->titre = $etapeData['titre'];
            $etape->resume = $etapeData['resume'];
            $etape->description = $etapeData['description'];
            $etape->debut = $etapeData['debut'];
            $etape->fin = $etapeData['fin'];
            $etape->voyage_id = $etapeData['voyage_id'];
            $etape->save();
        }
    }
}
