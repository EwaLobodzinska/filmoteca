<?php
require("connexion.php");

$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$elements = explode('/', $urlArray);
$dernier = end($elements);

switch($dernier){
    case 'films':
        var_dump("Page des films /films");
        break;
    case 'contact':
        var_dump("Page de contact /contact");
        break;
    
    default:
        var_dump("Page n'existe pas");
        break;
}
?>