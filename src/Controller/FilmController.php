<?php

declare(strict_types=1); //pas de conversion automatique (non permise) 3 + "3" (respecte des types)

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use App\Core\TwigEnvironment;

class FilmController
{  
    public function list()
    {
        $twig = TwigEnvironment::create();

        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        echo $twig->render('listeFilms.html.twig', ['movies' => $films]);
        /* $filmEntities = [];
        foreach ($films as $film) {
            $filmEntity = new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setType($film['type']);
            $filmEntity->setSynopsis($film['synopsis']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setCreatedAt(new \DateTime($film['created_at']));
            $filmEntity->setUpdatedAt(new \DateTime($film['updated_at']));

            $filmEntities[] = $filmEntity;
        } */

        //dd($films);

        // header('Content-Type: application/json');
        // echo json_encode($films);
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read(array $queryParams)
    {
        $twig = TwigEnvironment::create();

        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        echo $twig->render('read.html.twig', ['film' => $film]);

    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}