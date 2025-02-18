<?php


namespace App\Models;
use Illuminate\Support\Arr;

class Vinyles
{
    public static function all() : array
    {
        return [
            [
                'id' => 1,
                'titre' => 'Thriller',
                'artiste' => 'Michael Jackson',
                'anneeCreation' => "1982",
                'label' => 'Epic Records',
                'dateAjout' => "12 mars, 2024",
                "preview" => 'L’album le plus vendu de tous les temps, un chef-d’œuvre du King of Pop.',
                'description' => 'Sorti en 1982, "Thriller" est un album emblématique de Michael Jackson qui a révolutionné l’industrie musicale. Avec des titres légendaires comme "Billie Jean", "Beat It" et bien sûr "Thriller", l’album mélange pop, rock et R&B avec une production révolutionnaire. Il a remporté huit Grammy Awards et s’est vendu à plus de 70 millions d’exemplaires à travers le monde. Son clip emblématique de "Thriller" a marqué l’histoire de la musique avec ses effets spéciaux et sa chorégraphie inoubliable.',
            ],
            [
                'id' => 2,
                'titre' => 'The Dark Side of the Moon',
                'artiste' => 'Pink Floyd',
                'anneeCreation' => "1973",
                'label' => 'Harvest Records',
                'dateAjout' => "14 mars, 2024",
                "preview" => 'Un album culte qui explore les thèmes du temps, de la folie et de la société moderne.',
                'description' => 'Sorti en 1973, "The Dark Side of the Moon" est l’un des albums les plus influents de l’histoire du rock progressif. Conçu comme un concept album, il aborde des thèmes profonds comme la vie, la mort, la pression sociale et la folie, notamment inspiré par l’état mental de l’ancien membre du groupe, Syd Barrett. Avec des morceaux mythiques comme "Time", "Money" et "Us and Them", l’album est resté plus de 900 semaines dans le classement Billboard 200. Sa pochette avec le prisme et l’arc-en-ciel est devenue une icône de la culture pop.',
            ],
            [
                'id' => 3,
                'titre' => 'Back in Black',
                'artiste' => 'AC/DC',
                'anneeCreation' => "1980",
                'label' => 'Atlantic Records',
                'dateAjout' => "16 mars, 2024",
                "preview" => 'Un hommage explosif à Bon Scott qui a redéfini le hard rock.',
                'description' => 'Sorti en 1980, "Back in Black" est un album majeur du hard rock et l’un des plus vendus de l’histoire avec plus de 50 millions d’exemplaires écoulés. Il marque un tournant pour AC/DC après la mort tragique du chanteur Bon Scott. Avec Brian Johnson à la voix, l’album est un hommage vibrant, rempli d’énergie brute et de riffs légendaires. Des morceaux comme "Hells Bells", "You Shook Me All Night Long" et "Back in Black" sont devenus des classiques intemporels du rock. Son son puissant et sa production impeccable en font une référence incontournable du genre.',
            ]
            ];
        
    }

    public static function find($id): array 
    {
        $vinyle = Arr::first(Vinyles::all(), fn($vinyle) => $vinyle['id'] == $id);

        if(!$vinyle){
            abort(404);
        }

        return $vinyle;
    }
}
