<?php

require_once 'autoload.php';

$route = $_SERVER['REQUEST_URI'];

switch($route){
    case '/':
        $auth = new AuthController();
        if($auth->checkAuth()){
            echo "Autenticado!";
        }else{
            header('Location: /login');
        }
        break;
    case '/login':
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo 'fazer autenticacao';
        }else{
            $controller = new ViewController();
            $controller->render('login');
        }
        break;
        case '/register':
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo 'fazer cadastro';
            }else{
                $controller = new ViewController();
                $controller->render('register');
            }
            break;
    default:
    echo "Pagina nao encontrada!";
    break;
}