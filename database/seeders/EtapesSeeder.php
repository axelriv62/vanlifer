<?php

namespace Database\Seeders;

use App\Models\Etape;
use App\Models\Media;
use Illuminate\Database\Seeder;

class EtapesSeeder extends Seeder {
    public function run(): void {

        $etapesMMI = [
            ['titre' => "Tromso Langnes", 'resume' => "Trosmo Langnes est une ville de Norvège.", 'description' => "Arrivés à Tromso Langnes vers 8h00, nous décidons de chercher un endroit où se poser la nuit pour nos premiers pas en Norvège. Des recherches qui ont été relativement compliquées, mais nous avons enfin pu trouver près du port. C’est parti, le voyage commence enfin… Il fait déjà très froid, le vent nous glace le visage. Il est 16 h, nous partons visiter le port de la ville, le paysage y est à couper le souffle… Il y a tout de même moins de neige que ce à quoi nous nous attendions, mais l’excitation prend le dessus. Nous avons hâte de découvrir et d’apprendre la culture du pays. La ville commence à se réveiller peu à peu, la balade offre une vue imprenable sur les fjords et les montagnes. Après une longue balade, nous décidons d’aller déjeuner dans un petit restaurant de l’avenue Storgata. Une avenue assez sympathique. À première vue, la ville semble assez touristique. Un mélange plaisant de cultures qui donne le goût du voyage et de découverte. Après notre délicieux repas, nous tombons par hasard sur une agréable rue commerçante, dans laquelle nous nous promenons toute l’après-midi. La nuit commence à tomber et nous décidons de rebrousser chemin afin de retourner vers notre petit van que nous avons nommé au cours du voyage « Caroline ». La route, en plus de la journée nous a complétement épuisés. Mais nous avons cependant vraiment hâte de profiter de chaque journée de ce road trip.", 'debut' => "2024-12-17", 'fin' => "2024-12-19", 'voyage_id' => 1],
            ['titre' => "Nourrisage des rennes", 'resume' => "Activité de nourrisage de renne.", 'description' => "Le réveil est assez glacial, il a fait très froid durant la nuit. Heureusement, nous avions préparé de nombreuses couvertures, ainsi que des bouillottes pour se tenir au chaud... Notre journée commence à 9h00 avec la visite de la cathédrale arctique, célèbre pour son architecture atypique. Nous attendions beaucoup de cette visite, malheureusement, l’effet de surprise n’est pas au rendez-vous, et nous sommes un peu déçus. En effet, la visite est de trop courte durée, et finalement la forme triangulaire est trop minimaliste à mon goût. C’est moins spectaculaire qu’une cathédrale gothique comme celle de Strasbourg. Pour l’après-midi, nous avons réservé une visite guidée pour nourrir des rennes. Attachant et impressionnant, les soigneurs arrivent tout de même à nous mettre à l’aise. C’est un moment magique, comme une suspension dans le temps, avec ces animaux nobles et majestueux. La nuit tombée le ciel est assez dégagé ce qui nous permet de voir clairement les aurores boréales briller dans le ciel. Un événement tellement unique qu’il restera gravé dans nos mémoires. Le retour au van est assez difficile, car le froid nous paralyse le corps de plus en plus. Nous sommes attristés d’écourter ce spectacle que nous offre la nature, mais nous devons rentrer nous reposer, car qui sait ce qui nous attend demain…", 'debut' => "2024-12-20", 'fin' => "2024-12-22", 'voyage_id' => 1],
            ['titre' => "Sommaroy", 'resume' => "Visite de l'île de Sommaroy.", 'description' => "Contrairement au précédent, le réveil aujourd’hui se fait en douceur puisqu’au aujourd’hui nous avons décidé de prendre le chemin de la spontanéité et soleil est au rendez-vous. Direction donc, la petite île de Sommaroy. Quelques moments de panique pour arriver à l’île, car on y accède par une route étroite et scabreuse, nous y avançons cependant, non sans mal… Il est difficile de trouver l’endroit et notamment où se garer puisqu’il est assez reculé et isolé du reste. Ça y est, nous sommes arrivés, la magie opère. Le mélange de ces couleurs froides nous réchauffe en même temps le cœur, est emblématique. Les rues sont majoritairement composées de petites maisons colorées ainsi que des petits restaurants sympathiques et accueillantes. Le village est tout de même très petit, mais nous avons trouvé une petite montagne à grimper pour nous occuper, la montagne d’Ornfloya. Une randonnée assez facile avec des spots de vue si unique que nous sommes restée plus de 2 h. Pourtant, nous n’avions pas prévu de matériel, nous ne sommes pas non plus de grands marcheurs. Quand nous avons décidé de rentrer, le voyage était trop beau pour être vrai. Une tempête a commencé à se lever et il a été difficile de se repérer. Tremper, nous avons dû nous abriter sous le peu d’arbres trouvés, le temps que l’averse se calme. Une fois la tempête finie, nous nous dépêchons, car il est prévu de commencer la route vers Lofoten dans la soirée.", 'debut' => "2024-12-23", 'fin' => "2024-12-23", 'voyage_id' => 1],
            ['titre' => "Lofoten", 'resume' => "Route vers Lofoten.", 'description' => "Après une petite pause durant la nuit afin de se reposer. La lumière du soleil nous réveil doucement et nous décidons de reprendre la route vers Lofoten vers 8h00 du matin. Les divers paysages glacés défilent sous nos yeux. Le paysage fait passer la route longue et vallonnée. Le village semble, vivant et donne envie d’y visiter les moindres recoins. L’eau est translucide et silionne les maisons à l’architecture atypique et emblématiques, on se croirait à Venise, mais dans le froid ; c’est assez drôle. L’air marins et le cri des mouettes nous plonge dans l’activité principale du village, la pêche. Lors de la visite, nous avons pu apercevoir de nombreux pêcheurs. Un pêcheur nous a même expliqué comment il procédait et nous avons pu analyser la précision et la patiente requise. C’était très instructif, malheureusement, il n’a rien réussi à pêcher en notre présence. Mais nous avons récupéré son numéro de téléphone et il nous a envoyé ses trouvailles dans la soirée. En s’enfonçant un peu plus loin au cœur de la ville, nous sommes justement tombés sur des séchoirs à poisson, L’odeur est surprenantes et pas vraiment agréable. Puis nous avons été visité certaines villes aux alentours comme Hamnoy, Sakrisoy… En parlant avec plusieurs locaux comme ce pêcheur… Les habitants nous paraissent simples et souriants. L’île offre une atmosphère chaleureuse et accueillante pour nous en tant que touriste. Sur le retour, nous avons pu voir l’immensité du stade de foot d’Henningsvaer. Au départ, on ne se rend pas bien compte, mais ce lieu est réellement unique. Il offre une vue imprenable sur le village. De plus, toujours sur le retour, nous avons découvert plusieurs galeries d’art ainsi que de nombreuses boutiques.", 'debut' => "2024-12-24", 'fin' => "2024-12-24", 'voyage_id' => 1],
            ['titre' => "Henningsvaer", 'resume' => "Matinée enneigée à Henningsvaer.", 'description' => "Pour finir, notre séjour se termine sur une matinée enneigée. Nous avons décidé de réserver 1 h de spa vers Henningsvaer  , afin de pouvoir récupérer de ses jours si intensifs. Ce spa propose une vue spectaculaire sur ce magnifique panorama. Ensuite, nous avons été mangés au restaurant du spa. Le repas était succulent, nous avions rarement aussi bien mangé. Saumon fumé, bar, dorade ou encore sole était servis accompagné de petits légumes. Maintenant et pour notre dernière destination direction la capitale, Oslo. Nous en rêvions depuis longtemps. Lorsque nous arrivons, les espaces verts ne manquent pas. Forêts, parcs, fjord se faufile jusqu'au centre-ville. Le centre d’Oslo est très visité, il y a énormément de touristes, cela nous plaît moins, car l’esprit de tranquillité n’est plus présent. Nous trouvons ça dommage surtout au vu de la journée apaisante que nous avons faite. Notre séjour s’achève après un dernier repas dans le restaurant Hereford Steakhouse. Nous avons eu un merveilleux séjour et un réel coup de cœur pour ce pays et notamment ses villes. Malgré les quelques problèmes rencontrés au cours de notre séjour. L’architecture, la tranquillité et le paysage à couper le souffle nous a permis de s’échapper de la réalité.", 'debut' => "2024-12-25", 'fin' => "2024-12-25", 'voyage_id' => 1],
        ];

        for($i = 0; $i < count($etapesMMI); $i++) {
            $etape = Etape::create($etapesMMI[$i]);
            $image ='photo_'.($i + 1).'.webp';

            Media::create([
                'etape_id' => $etape->id,
                'url' => env('APP_URL')."/storage/images/$image",
                'format' => 'image',
                'titre' => pathinfo($image, PATHINFO_FILENAME),
            ]);
        }

        $images = [
            'Amsterdam1.jpg', 'Amsterdam2.jpg', 'Amsterdam3.jpg', 'Anvers1.jpg', 'Anvers2.jpg',
            'breme.jpg', 'Bruxelles1.jpg', 'Bruxelles2.jpg', 'copenhague.jpg', 'Hambourg.jpg',
            'oso.jpg', 'Lens.jpg'
        ];

        $etapes = [
            ['titre' => "Lens", 'resume' => "Lens est une ville du nord de la France.", 'description' => "Lens est une ville du nord de la France.", 'debut' => "2024-11-17", 'fin' => "2024-11-19", 'voyage_id' => 2],
            ['titre' => "Bruxelles", 'resume' => "Bruxelles est la capitale de la Belgique.", 'description' => "Bruxelles est la capitale de la Belgique.", 'debut' => "2024-11-20", 'fin' => "2024-11-22", 'voyage_id' => 2],
            ['titre' => "Anvers", 'resume' => "Anvers est une ville de Belgique.", 'description' => "Anvers est une ville de Belgique.", 'debut' => "2024-11-23", 'fin' => "2024-11-25", 'voyage_id' => 2],
            ['titre' => "Amsterdam", 'resume' => "Amsterdam est la capitale des Pays-Bas.", 'description' => "Amsterdam est la capitale des Pays-Bas.", 'debut' => "2024-11-26", 'fin' => "2024-11-28", 'voyage_id' => 2],
            ['titre' => "Hambourg", 'resume' => "Hambourg est une ville d'Allemagne.", 'description' => "Hambourg est une ville d'Allemagne.", 'debut' => "2024-11-29", 'fin' => "2024-12-01", 'voyage_id' => 2],
            ['titre' => "Lens", 'resume' => "Lens est une ville du nord de la France.", 'description' => "Lens est une ville du nord de la France.", 'debut' => "2024-11-17", 'fin' => "2024-11-19", 'voyage_id' => 3],
            ['titre' => "Bruxelles", 'resume' => "Bruxelles est la capitale de la Belgique.", 'description' => "Bruxelles est la capitale de la Belgique.", 'debut' => "2024-11-20", 'fin' => "2024-11-22", 'voyage_id' => 3],
            ['titre' => "Anvers", 'resume' => "Anvers est une ville de Belgique.", 'description' => "Anvers est une ville de Belgique.", 'debut' => "2024-11-23", 'fin' => "2024-11-25", 'voyage_id' => 3],
            ['titre' => "Amsterdam", 'resume' => "Amsterdam est la capitale des Pays-Bas.", 'description' => "Amsterdam est la capitale des Pays-Bas.", 'debut' => "2024-11-26", 'fin' => "2024-11-28", 'voyage_id' => 3],
            ['titre' => "Hambourg", 'resume' => "Hambourg est une ville d'Allemagne.", 'description' => "Hambourg est une ville d'Allemagne.", 'debut' => "2024-11-29", 'fin' => "2024-12-01", 'voyage_id' => 3],
            ['titre' => "Prague", 'resume' => "Prague est la capitale de la République tchèque.", 'description' => "Prague est la capitale de la République tchèque.", 'debut' => "2024-12-11", 'fin' => "2024-12-13", 'voyage_id' => 3],
            ['titre' => "Budapest", 'resume' => "Budapest est la capitale de la Hongrie.", 'description' => "Budapest est la capitale de la Hongrie.", 'debut' => "2024-12-14", 'fin' => "2024-12-16", 'voyage_id' => 3],
        ];

        foreach ($etapes as $etapeData) {
            $etape = Etape::create($etapeData);
            $randomImage = $images[array_rand($images)];

            Media::create([
                'etape_id' => $etape->id,
                'url' => env('APP_URL')."/storage/user1/$randomImage",
                'format' => 'image',
                'titre' => pathinfo($randomImage, PATHINFO_FILENAME),
            ]);
        }
    }
}
