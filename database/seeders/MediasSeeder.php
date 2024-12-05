<?php

namespace Database\Seeders;

use App\Models\Etape;
use App\Models\Media;
use Illuminate\Database\Seeder;

class MediasSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $medias = [
            "Europe du Nord" => "/storage/voyages/europe-nord.jpg",
            'Lens' => "/storage/voyages/Lens.jpg",
            'Bruxelles1' => "/storage/voyages/Bruxelles1.jpg",
            'Bruxelles2' => "/storage/voyages/Bruxelles2.jpg",
            'Anvers1' => "/storage/voyages/Anvers1.jpg",
            "Anvers2" => "/storage/voyages/Anvers2.jpg",
            "Amsterdam1" => "/storage/voyages/Amsterdam1.jpg",
            'Amsterdam2' => "/storage/voyages/Amsterdam2.jpg",
            "Amsterdam3" => "/storage/voyages/Amsterdam3.jpg",
            'Hambourg1' => "/storage/voyages/Hambourg.jpg",
            "Breme1" => "/storage/voyages/breme.jpg",
            'Copenhague1' => "/storage/voyages/copenhague.jpg",
            "Oslo1" => "/storage/voyages/oslo.jpg",
        ];



        foreach ($medias as $nom => $url) {
            if ($nom === 'Europe du Nord') {
                continue;
            }
            $pattern = '/(\\D*)([0-9]+?)/';
            $success = preg_match($pattern, $nom, $match);
            if ($success) {
                $nom = $match[1];
            } else {
                continue;
            }
            $id = Etape::where('titre', $nom)->first();
            if ($id === null) {
                echo "Etape $nom non trouvée\n";
                continue;
            }
            //$nom = str_replace('.*([0-9]*)', '', $nom);
            Media::create([
                'titre' => $nom,
                'ref' => env('APP_URL').$url,
                'etape_id' => Etape::where('titre', $nom)->first()->id,
            ]);
        }
    }
}
