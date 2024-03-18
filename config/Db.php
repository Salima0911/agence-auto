<?php

namespace Config;

use PDO;
use Exception;

// on creer une class db qui vas avoir methode static qui va routrner une instance class pdo
class Db
{
    static function getConnection()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=agence-auto;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage()); // Terminer le script avec un message d'erreur
        }
        return $pdo;
    }
}
