<?php 
namespace App\Controllers;

//on se creer  une classe specifique pour gerer les eurreurs afin de pouvoir rajouter
//des methodes defferente en dontion de chaque erreurs 

class ErrorController{

    static function notFound(){
        http_response_code(404);
        require_once(__DIR__.'/../Views/errors/404.php');
        exit();
    }
    static function internalServerError(){
        http_response_code(500);
        require_once(__DIR__.'/../Views/errors/500.php');
        exit();
    }
  
}