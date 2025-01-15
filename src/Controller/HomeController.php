<?php

namespace App\Controller;

use App\Core\TwigEnvironment;

class HomeController{  
    public function home(){
        $twig = TwigEnvironment::create();
        echo $twig->render('homePage.html.twig');
    }
}