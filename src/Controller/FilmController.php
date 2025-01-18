<?php

declare(strict_types=1); //pas de conversion automatique (non permise) 3 + "3" (respecte des types)

namespace App\Controller;

use App\Core\TemplateRenderer;
use App\Entity\Film;
use App\Repository\FilmRepository;

class FilmController
{  
    private TemplateRenderer $renderer;
    private FilmRepository $filmRepository;

    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
        $this->filmRepository = new FilmRepository();
    }
    public function list()
    {
        $films = $this->filmRepository->findAll();

        echo $this->renderer->render('listeFilms.html.twig', ['movies' => $films]);
    }

    public function create()
    {
        $message = null;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $newFilm = [
                'title' => $_POST['title'],
                'year' => $_POST['year'],
                'synopsis' => $_POST['synopsis'],
                'director' => $_POST['director'],
                'type' => $_POST['type'],
            ];
    
            if ($this->filmRepository->create($newFilm)) {
                $message = "Nouveau film bien ajouté!";
                // header("Location: /films/create");
                // exit;
        }
    }

        echo $this->renderer->render('create.html.twig', ['message' => $message]);
    }

    public function read(array $queryParams)
    {

        $film = $this->filmRepository->find((int) $queryParams['id']);

        echo $this->renderer->render('read.html.twig', ['film' => $film]);

    }

    public function update(array $queryParams)
    {

        $id = (int) $queryParams['id'];
        $film = $this->filmRepository->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $newFilm = [
                'title' => $_POST['title'],
                'year' => $_POST['year'],
                'synopsis' => $_POST['synopsis'],
                'director' => $_POST['director'],
                'type' => $_POST['type'],
            ];
    
            if ($this->filmRepository->update($newFilm, $id)) {

                header("Location: /films/read?id=".$id);
                exit;
        }
    }
        echo $this->renderer->render('update.html.twig', ['film' => $film]);
    }

    public function delete(array $queryParams)
    {
        $id = (int) $queryParams['id'];
        $this->filmRepository->delete($id);
        header("Location: /films/list"); 
        exit;
    }
    
}