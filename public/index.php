<?php
// require("connexion.php");

// $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $elements = explode('/', $urlArray);
// $dernier = end($elements);

// switch($dernier){
//     case 'films':
//         var_dump("Page des films /films");
//         break;
//     case 'contact':
//         var_dump("Page de contact /contact");
//         break;
    
//     default:
//         var_dump("Page n'existe pas");
//         break;
// }

declare(strict_types=1); // Déclare le mode strict pour les types de données

require __DIR__ . '/../vendor/autoload.php'; // Charge automatiquement les classes nécessaires via Composer

use App\Core\Router; // Utilise la classe Router du namespace App\Core

// FRONT-CONTROLLER
$router = new Router(); // Crée une nouvelle instance de la classe Router
$rout = $router->route(); // Appelle la méthode route() pour gérer les requêtes entrantes


