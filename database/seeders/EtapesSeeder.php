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
                'titre' => "Tromso Langnes",
                'resume' => "Trosmo Langnes est une ville de Norvège.",
                'description' => "Arrivée à Tromso Langnes vers 8h00, nous décidons de trouver un endroit où se poser la nuit pour nos premiers pas en Norvège. Des recherches qui ont été relativement compliquée, mais nous avons enfin trouver près du port. C’est parti, le voyage commence enfin… Vers 16 h, nous sommes partis visiter le port de la ville. Le paysage est à couper le souffle, il y a tout de même moins de neige que ce à quoi nous nous attendions, mais l’excitation en prend le dessus. La balade offre une vue imprenable sur les fjords et les montagnes et la ville commence à se réveiller peu à peu. Après une longue balade, nous avons décidé d’aller déjeuner dans un petit restaurant de l’avenue Storgata. À première vue, la ville semble assez touristique. Un mélange plaisant de Français, d’Anglais qui donne le goût du voyage et de la découverte. Après notre repas, nous tombons par hasard sur une agréable rue commerçante dans laquelle nous avons pu nous balader toute l’après-midi. La nuit commence à tomber et nous décidons de se diriger afin de retourner vers le van. Le voyage suivi de la journée a été extrêmement épuisant et nous voulons profiter de chaque journée de ce road trip.
",
                'debut' => "2024-12-17",
                'fin' => "2024-12-19",
                'voyage_id' => 3,
            ],
            [
                'titre' => "Nourrisage des rennes",
                'resume' => "Rome est la capitale de l'Italie.",
                'description' => "Le réveil est assez glacial, il a fait très froid durant la nuit. Heureusement, nous avons préparé de nombreuses couvertures pour se tenir au chaud. Notre journée commence avec la visite de la cathédrale arctique, avec une architecture atypique néanmoins l’effet de surprise est beaucoup moins que celui auquel nous nous entendions. Pour l’après-midi, nous avons réservé une visite guidée pour nourrir des rennes. Attachant et impressionnant, c’était comme vivre un moment suspendu dans le temps, avec les animaux. La nuit tombée le ciel est assez dégagé pour voir les aurores boréales briller dans le ciel. Un événement si unique qui restera gravé dans nos mémoires. Le retour au van est assez difficile, car le froid nous paralyse le corps de plus en plus.",
                'debut' => "2024-12-20",
                'fin' => "2024-12-22",
                'voyage_id' => 3,
            ],
            [
                'titre' => "Sommaroy",
                'resume' => "Visite de l'île de Sommaroy.",
                'description' => "Le réveil est en douceur car aujourd’hui nous avons décidé de prendre le chemin de la spontanéité. Direction la petite île de Sommaroy. Quelques moments de panique pour arriver à l’île car on y accède par une route étroite, nous avons également eu du mal à trouver l’endroit et notamment où se garer. Enfin arrivé, la magie opère. Le mélange de ces couleurs froides qui nous réchauffe en même temps le cœur, est emblématique. Les rues sont majoritairement composées de petites maisons colorées ainsi que des petits restaurants sympathiques et accueillantes. Le village est tout de même très petit, mais nous avons trouvé une petite montagne à grimper pour nous occuper, la montagne d’Ornfloya. Une randonnée assez facile avec des spots de vue si unique que nous sommes restée plus de 2 h . Mais le voyage était trop beau pour être vrai, une tempête a commencé à se lever et il a été difficile de se repérer. Tremper, nous avons dû nous abriter sous le peu d’arbres trouvés le temps que l’averse se calme. Nous avons donc décidé de rejoindre le van, car nous avons prévu de commencer la route vers Lofoten dans la soirée.",
                'debut' => "2024-12-23",
                'fin' => "2024-12-23",
                'voyage_id' => 3,
            ],
            [
                'titre' => "Lofoten",
                'resume' => "Route vers Lofoten.",
                'description' => "Nous avons continué la route vers Lofoten vers 8h00 du matin. La lumière du soleil nous réveil doucement et nous décidons de reprendre la route. Les divers paysages glacés défilent sous nos yeux. Le paysage fait passer la route longue et vallonnée. Le village semble vivant est donne envie d’y visiter les moindres recoins. L’eau est translucide et silionne les maisons à l’architecture atypique et emblématiques. Nous avons pu apercevoir de nombreux pêcheurs, il y en a même un qui nous a expliqué comment il faisait, c’était très instructif. L’air marins et le cri des mouettes nous plonge dans l’activité principale du village, la pêche. Nous sommes justement tombés sur des séchoirs à poisson, L’odeur est surprenantes et pas vraiment agréable, c’est pour cela que nous avons décidé de repartir près du van. Sur le retour, nous avons pu voir l’immensité du stade de foot d’Henningsvaer. Au départ, on ne se rend pas bien compte, mais ce lieu est réellement unique. De plus, nous avons découvert plusieurs galeries d’art ainsi que de nombreuses boutiques.",
                'debut' => "2024-12-24",
                'fin' => "2024-12-24",
                'voyage_id' => 3,
            ],
            [
                'titre' => "Henningsvaer",
                'resume' => "Matinée enneigée à Henningsvaer.",
                'description' => "Pour finir, notre séjour se termine sur une matinée enneigée. Nous avons décidé de réserver 1 h de spa vers Henningsvaer, afin de pouvoir récupérer de ses jours si intensifs. Ce spa propose une vue spectaculaire sur ce magnifique panorama. Ensuite, nous avons été mangés au restaurant du spa. Le repas était succulent, nous avions rarement aussi bien mangé. Saumon fumé, bar, dorade ou encore sole était servis accompagné de petits légumes. Notre séjour s’achève après ce repas. Nous avons eu un merveilleux séjour et un réel coup de cœur pour ce pays et notamment ses villes. Malgré les quelques problèmes rencontrés au cours de notre séjour.",
                'debut' => "2024-12-25",
                'fin' => "2024-12-25",
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
