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
                'titre' => "Tokyo",
                'resume' => "Tokyo est la capitale du Japon.",
                'description' => "Tokyo est la capitale du Japon, connue pour ses gratte-ciel, ses temples et sa culture pop.",
                'debut' => "2024-12-05",
                'fin' => "2024-12-10",
                'voyage_id' => 2,
            ],
            [
                'titre' => "Kyoto",
                'resume' => "Kyoto est une ville historique du Japon.",
                'description' => "Kyoto est célèbre pour ses nombreux temples, jardins et palais impériaux.",
                'debut' => "2024-12-11",
                'fin' => "2024-12-15",
                'voyage_id' => 2,
            ],
            [
                'titre' => "Rio de Janeiro",
                'resume' => "Rio de Janeiro est une ville emblématique du Brésil.",
                'description' => "Rio de Janeiro est connue pour ses plages, son carnaval et le Christ Rédempteur.",
                'debut' => "2024-12-20",
                'fin' => "2024-12-25",
                'voyage_id' => 3,
            ],
            [
                'titre' => "Buenos Aires",
                'resume' => "Buenos Aires est la capitale de l'Argentine.",
                'description' => "Buenos Aires est célèbre pour son architecture européenne et sa vie culturelle dynamique.",
                'debut' => "2024-12-26",
                'fin' => "2024-12-30",
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
