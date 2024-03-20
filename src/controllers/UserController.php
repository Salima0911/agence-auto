<?php

namespace App\Controllers;

use App\Models\User;
use App\Utils\AbstractController;

class UserController extends AbstractController
{

    public function index()
    {
        $users = User::getAll();
        // var_dump($users);
        // die;
        require_once(__DIR__ . '/../Views/user/index.view.php');
    }
    public function read()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user = User::getById($id);
            if (!$user) {
                ErrorController::internalServerError();
            }
            require_once(__DIR__ . '/../Views/user/read.view.php');
        } else {
            ErrorController::notFound();
        }
    }
    public function create()
    {
        if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
            $user = new User(null, $_POST['name'], $_POST['email'], $_POST['password']);
            $user->save();

            $this->redirectToRoute('/user');
        }

        require_once(__DIR__ . '/../Views/user/create.view.php');
    }
    public function update()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user = User::getById($id);
            if (!$user) {
                ErrorController::internalServerError();
            }
             if (isset($_POST['name'], $_POST['email'], $_POST['password'])) 
            {
                $user -> setName($_POST['name']); 
                $user -> setEmail($_POST['email']);
                $user -> setPassword ($_POST['password']);

                $user->update();
    
                $this->redirectToRoute('/user');
            }
            require_once(__DIR__ . '/../Views/user/update.view.php');
        } else {
            ErrorController::notFound();
        }
       
    }
    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if (User::getById($id)) {
                User::delete($id);
                $this->redirectToRoute('/user');
            } else {
                ErrorController::internalServerError();
            }
        }else{
            ErrorController::notFound();
        }
    }
}
