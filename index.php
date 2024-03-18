<?php 

require "vendor/autoload.php";
use config\Router;

$router = new Router();
// j'utilise  la methode addRoute de mon controller pour ajouter des route au controller
//cette methode prend tros arguement, la route, le controller  et la methode execute
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/mention', 'HomeController', 'mention');

// la methode handleRequest permet de gerer la requete (elle parcours le tableau des routes et instancie la classe
//controller correspondante si la route est trouvé)
$router->handleRequest();

