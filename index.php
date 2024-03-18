<?php 

require "vendor/autoload.php";
use Config\Router;

$router = new Router();
// j'utilise  la methode addRoute de mon controller pour ajouter des route au controller
//cette methode prend tros arguement, la route, le controller  et la methode execute

//Route principale
$router->addRoute('/', 'HomeController', 'index');


// Route Vehicule
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/vehicule', 'VehiculeController', 'index');
$router->addRoute('/vehicule/read', 'VehiculeController', 'read');
$router->addRoute('/vehicule/create', 'VehiculeController', 'create');
$router->addRoute('/vehicule/update', 'VehiculeController', 'update');
$router->addRoute('/vehicule/delete', 'VehiculeController', 'delete');
/////////////////////////


// la methode handleRequest permet de gerer la requete (elle parcours le tableau des routes et instancie la classe
//controller correspondante si la route est trouvé)
$router->handleRequest();

