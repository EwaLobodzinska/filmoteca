<?php

class Router{

    function route(){
        $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $elements = explode('/', $urlArray);
        $dernier = end($elements);
        var_dump($dernier);
    }
}

$router = new Router();
$router -> route();

?>