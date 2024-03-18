<?php 

namespace App\Controllers;

// je creer  une classe que j'appelle de la meme maniere que le fichier
// !!ATTENTION!  TOUJOURS EN PASCALCASE
// on utilise la classe Homr Controller  non pas pour manipule  un objet  mais 
//por pouvoir executer les methodes qu'on souhaite n'impore ou dans notre projet 

class HomeController
{
    public function index(){

        require_once(__DIR__.'/../Views/home.view.php');
    }
 

}