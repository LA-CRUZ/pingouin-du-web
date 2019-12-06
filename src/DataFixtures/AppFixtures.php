<?php
namespace App\DataFixtures;

use App\Entity\Keywords;
use App\Entity\Questions;
use App\Repository\KeywordsRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $data = [
            [
                "title" => "J'aimerais apprendre à réparer mon vélo.",
                "keyword" => ["velo", "petit_budget"]
            ],
            [
                "title" => "J'aimerais déménager à vélo.",
                "keyword" => ["velo", "rechercher_log"]
            ],
            [
                "title" => "J'aimerais vivre en colocation.",
                "keyword" => ["rechercher_log", "petit_budget", "rencontres"]
            ],
            [
                "title" => "Mon ordinateur est en panne, j'aimerais de l'aide pour le réparer.",
                "keyword" => ["petit_budget"]
            ],
            [
                "title" => "Je cherche une ludothèque.",
                "keyword" => ["loisirs", "rencontres"]
            ],
            [
                "title" => "J'aimerais jouer à des jeux de société coopératifs.",
                "keyword" => ["loisirs", "rencontres"]
            ],
            [
                "title" => "Je me pose des questions sur ma sexualité",
                "keyword" => ["sexualite", "besoin_aide"]
            ],
            [
                "title" => "Je souhaite connaitre mes droit au apl",
                "keyword" => ["apl", "crous", "aide_log"]
            ],
            [
                "title" => "Je cherche à connaitre mon echelon de bourse",
                "keyword" => ["crous", "aide_log"]
            ],
            [
                "title" => "Je souhaite faire une demande d'hebergement d'urgence",
                "keyword" => ["urgence_log", "rechercher_log", "crous", "aide_log"]
            ],
            [
                "title" => "Je souhaite connaitre mes possibilités de transport",
                "keyword" => ["velo", "abonnement", "bus", "trains"]
            ],
            [
                "title" => "Comment gerer ma déclaration d'impôt",
                "keyword" => ["impot"]
            ],
            [
                "title" => "Je cherche un job étudiant",
                "keyword" => ["jobs", "rencontres", "agenda"]
            ],
            [
                "title" => "Je cherche une bibliothèque adapté à mon handicap",
                "keyword" => ["loisirs", "rencontres", "handicap"]
            ],
            [
                "title" => "Je cherche un logement adapté à mon handicap",
                "keyword" => ["rechercher_log", "handicap", "crous"]
            ],
            [
                "title" => "Je souhaite rencontrer des gens dans mon quartier",
                "keyword" => ["loisirs", "rencontres"]
            ],
            [
                "title" => "Je ne reçoit plus ma bourse",
                "keyword" => ["crous"]
            ],
            [
                "title" => "Je ne trouve aucun logement au crous",
                "keyword" => ["rechercher_log", "crous", "urgence_log"]
            ],
            [
                "title" => "Je cherche une solution adapté pour mon handicap",
                "keyword" => ["besoin_aide", "handicap"]
            ],
            [
                "title" => "Je cherche des informations sur un abonnement de transport",
                "keyword" => ["velo", "trains", "abonnement", "bus"]
            ],
            [
                "title" => "Je souhaite participer à des actions bénévoles",
                "keyword" => ["agenda", "loisirs", "rencontres"]
            ]
        ];

        $repo = $manager->getRepository(Keywords::class);
        
        foreach ($data as $q) {
            $question =  new Questions();
            $question->setText((String)$q['title']);
            foreach ($q['keyword'] as $keyword) {
                $key = $repo->findOneBy(['title' => $keyword]);

                if($key == null) {
                    $key = new Keywords();
                    $key->setTitle($keyword);
                    $key->addQuestion($question);
                    $manager->persist($key);
                }

                $question->addKeyword($key);
            }
            $manager->persist($question);
            $manager->flush();
        } 
    }
}