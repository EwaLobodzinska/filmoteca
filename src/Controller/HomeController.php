<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\TemplateRenderer;

class HomeController
{
    private TemplateRenderer $renderer;

    public function __construct()
    {
        // Initialise le moteur de template Twig
        $this->renderer = new TemplateRenderer();
    }

    public function home()
    {
        echo $this->renderer->render('homePage.html.twig');
    }
}