<?php

use Controller\FuncionarioController;
use Controller\HomeController;
use Controller\LoginController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url) {
    // Autenticação
    case '/login':
        LoginController::login();
        break;

    case '/autenticar':
        LoginController::autenticar();
        break;

    case '/sair':
        LoginController::sair();
        break;

    // Página Home
    case '/':
        HomeController::index();
        break;
    
    // Funcionário
    case '/funcionario':
        FuncionarioController::listar();
        break;
    
    case "/funcionario/form":
        FuncionarioController::form();
        break;

    case "/funcionario/form/create":
        FuncionarioController::create();
        break;
    case "/funcionario/delete":
        FuncionarioController::delete();
    default:
        echo "Erro 404";
        break;
}

?>