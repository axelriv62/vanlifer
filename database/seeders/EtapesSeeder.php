<?php

namespace Database\Seeders;

use App\Models\Etape;
use Illuminate\Database\Seeder;

class EtapesSeeder extends Seeder {
    public function run(): void {
        $etapes = [
            ['titre' => "Lens", 'resume' => "Lens est une ville du nord de la France.", 'description' => "Lens est une ville du nord de la France.", 'debut' => "2024-11-17", 'fin' => "2024-11-19", 'voyage_id' => 1],
            ['titre' => "Bruxelles", 'resume' => "Bruxelles est la capitale de la Belgique.", 'description' => "Bruxelles est la capitale de la Belgique.", 'debut' => "2024-11-20", 'fin' => "2024-11-22", 'voyage_id' => 1],
            ['titre' => "Anvers", 'resume' => "Anvers est une ville de Belgique.", 'description' => "Anvers est une ville de Belgique.", 'debut' => "2024-11-23", 'fin' => "2024-11-25", 'voyage_id' => 1],
            ['titre' => "Amsterdam", 'resume' => "Amsterdam est la capitale des Pays-Bas.", 'description' => "Amsterdam est la capitale des Pays-Bas.", 'debut' => "2024-11-26", 'fin' => "2024-11-28", 'voyage_id' => 1],
            ['titre' => "Hambourg", 'resume' => "Hambourg est une ville d'Allemagne.", 'description' => "Hambourg est une ville d'Allemagne.", 'debut' => "2024-11-29", 'fin' => "2024-12-01", 'voyage_id' => 1],
            ['titre' => "Prague", 'resume' => "Prague est la capitale de la République tchèque.", 'description' => "Prague est la capitale de la République tchèque.", 'debut' => "2024-12-11", 'fin' => "2024-12-13", 'voyage_id' => 2],
            ['titre' => "Budapest", 'resume' => "Budapest est la capitale de la Hongrie.", 'description' => "Budapest est la capitale de la Hongrie.", 'debut' => "2024-12-14", 'fin' => "2024-12-16", 'voyage_id' => 2],
            ['titre' => "Tromso Langnes", 'resume' => "Trosmo Langnes est une ville de Norvège.", 'description' => "Trosmo Langnes est une ville de Norvège.", 'debut' => "2024-12-17", 'fin' => "2024-12-19", 'voyage_id' => 3],
            ['titre' => "Nourrisage des rennes", 'resume' => "Activité de nourrisage de renne.", 'description' => "Activité de nourrisage de renne.", 'debut' => "2024-12-20", 'fin' => "2024-12-22", 'voyage_id' => 3],
            ['titre' => "Sommaroy", 'resume' => "Visite de l'île de Sommaroy.", 'description' => "Visite de l'île de Sommaroy.", 'debut' => "2024-12-23", 'fin' => "2024-12-23", 'voyage_id' => 3],
            ['titre' => "Lofoten", 'resume' => "Route vers Lofoten.", 'description' => "Route vers Lofoten.", 'debut' => "2024-12-24", 'fin' => "2024-12-24", 'voyage_id' => 3],
            ['titre' => "Henningsvaer", 'resume' => "Matinée enneigée à Henningsvaer.", 'description' => "Matinée enneigée à Henningsvaer.", 'debut' => "2024-12-25", 'fin' => "2024-12-25", 'voyage_id' => 3],
            ['titre' => "Paris", 'resume' => "Paris est la capitale de la France.", 'description' => "Paris est la capitale de la France.", 'debut' => "2024-12-26", 'fin' => "2024-12-28", 'voyage_id' => 4],
            ['titre' => "Lyon", 'resume' => "Lyon est une ville de France.", 'description' => "Lyon est une ville de France.", 'debut' => "2024-12-29", 'fin' => "2024-12-31", 'voyage_id' => 4],
            ['titre' => "Marseille", 'resume' => "Marseille est une ville de France.", 'description' => "Marseille est une ville de France.", 'debut' => "2025-01-01", 'fin' => "2025-01-03", 'voyage_id' => 4],
            ['titre' => "Madrid", 'resume' => "Madrid est la capitale de l'Espagne.", 'description' => "Madrid est la capitale de l'Espagne.", 'debut' => "2025-01-04", 'fin' => "2025-01-06", 'voyage_id' => 5],
            ['titre' => "Barcelona", 'resume' => "Barcelona est une ville d'Espagne.", 'description' => "Barcelona est une ville d'Espagne.", 'debut' => "2025-01-07", 'fin' => "2025-01-09", 'voyage_id' => 5],
            ['titre' => "Valencia", 'resume' => "Valencia est une ville d'Espagne.", 'description' => "Valencia est une ville d'Espagne.", 'debut' => "2025-01-10", 'fin' => "2025-01-12", 'voyage_id' => 5],
            ['titre' => "Rome", 'resume' => "Rome est la capitale de l'Italie.", 'description' => "Rome est la capitale de l'Italie.", 'debut' => "2025-01-13", 'fin' => "2025-01-15", 'voyage_id' => 6],
            ['titre' => "Milan", 'resume' => "Milan est une ville d'Italie.", 'description' => "Milan est une ville d'Italie.", 'debut' => "2025-01-16", 'fin' => "2025-01-18", 'voyage_id' => 6],
            ['titre' => "Venice", 'resume' => "Venice est une ville d'Italie.", 'description' => "Venice est une ville d'Italie.", 'debut' => "2025-01-19", 'fin' => "2025-01-21", 'voyage_id' => 6],
            ['titre' => "Berlin", 'resume' => "Berlin est la capitale de l'Allemagne.", 'description' => "Berlin est la capitale de l'Allemagne.", 'debut' => "2025-01-22", 'fin' => "2025-01-24", 'voyage_id' => 7],
            ['titre' => "Munich", 'resume' => "Munich est une ville d'Allemagne.", 'description' => "Munich est une ville d'Allemagne.", 'debut' => "2025-01-25", 'fin' => "2025-01-27", 'voyage_id' => 7],
            ['titre' => "Hamburg", 'resume' => "Hamburg est une ville d'Allemagne.", 'description' => "Hamburg est une ville d'Allemagne.", 'debut' => "2025-01-28", 'fin' => "2025-01-30", 'voyage_id' => 7],
            ['titre' => "Athens", 'resume' => "Athens est la capitale de la Grèce.", 'description' => "Athens est la capitale de la Grèce.", 'debut' => "2025-01-31", 'fin' => "2025-02-02", 'voyage_id' => 8],
            ['titre' => "Thessaloniki", 'resume' => "Thessaloniki est une ville de Grèce.", 'description' => "Thessaloniki est une ville de Grèce.", 'debut' => "2025-02-03", 'fin' => "2025-02-05", 'voyage_id' => 8],
            ['titre' => "Patras", 'resume' => "Patras est une ville de Grèce.", 'description' => "Patras est une ville de Grèce.", 'debut' => "2025-02-06", 'fin' => "2025-02-08", 'voyage_id' => 8],
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
