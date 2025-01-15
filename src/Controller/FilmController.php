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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filmRepository = new FilmRepository();
    
            $newFilm = [
                'title' => $_POST['title'],
                'year' => $_POST['year'],
                'synopsis' => $_POST['synopsis'],
                'director' => $_POST['director'],
                'type' => $_POST['type'],
            ];
    
            if ($filmRepository->create($newFilm)) {
                session_start(); 
                $_SESSION['message'] = 'Nouveau film bien ajoute!';

                header("Location: /films/create");
                exit;
        }
    }
        $twig = TwigEnvironment::create();
        echo $twig->render('create.html.twig');
    }

    public function read(array $queryParams)
    {
        $twig = TwigEnvironment::create();

        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        echo $twig->render('read.html.twig', ['film' => $film]);

    }

    public function update(array $queryParams)
    {
              
        $twig = TwigEnvironment::create();

        $filmRepository = new FilmRepository();
        $id = (int) $queryParams['id'];
        $film = $filmRepository->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $newFilm = [
                'title' => $_POST['title'],
                'year' => $_POST['year'],
                'synopsis' => $_POST['synopsis'],
                'director' => $_POST['director'],
                'type' => $_POST['type'],
            ];
    
            if ($filmRepository->update($newFilm, $id)) {
                session_start(); 
                $_SESSION['message'] = 'Film bien modifie!';

                header("Location: /films/list");
                exit;
        }
    }
        echo $twig->render('update.html.twig', ['film' => $film]);
    }

    public function delete(array $queryParams)
    {
        $twig = TwigEnvironment::create();
        $id = (int) $queryParams['id'];
    
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find($id);
 
        $filmRepository->delete($film);
        header("Location: /films/list"); 
        exit;
    }
    
}