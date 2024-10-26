<?php

use app\controller\EquipeController;
use app\controller\HomeController;
use app\controller\LoginController;
use app\controller\ProdutoController;
use app\controller\VendaController;
use app\controller\VendedorController;
use app\model\entity\Vendedor;
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($url) {
    case "/":
        LoginController::login();
        break;
    case "/Login":
        LoginController::login();
        break;
    case "/Home":
        HomeController::index();
        break;
    case "/logout":
        LoginController::sair();
        break;
    //Rotas de Produto
    case "/Produto":
        ProdutoController::listar();
        break;
    case "/Produto/create":
        ProdutoController::form();
        break;
    case "/Produto/form/store":
        ProdutoController::create();
        break;
    case "/Produto/update":
        ProdutoController::edit();
        break;
    case "/Produto/destroy":
        ProdutoController::delete();
        break;
    //Rotas para Equipe
    case "/Equipe":
        EquipeController::listar();
        break;
    case "/Equipe/create":
        EquipeController::form();
        break;
    case "/Equipe/form/store":
        EquipeController::create();
        break;
    case "/Equipe/update":
        EquipeController::edit();
        break;
    case "/Equipe/destroy":
        EquipeController::delete();
        break;
    //Rotas para Vendedor
    case "/Vendedor":
        VendedorController::listar();
        break;
    case "/Vendedor/create":
        VendedorController::form();
        break;
    case "/Vendedor/form/store":
        VendedorController::create();
        break;
    case "/Vendedor/update":
        VendedorController::edit();
        break;
    case "/Vendedor/destroy":
        VendedorController::delete();
        break;
    case "/Venda":
        VendaController::listar();
        break;
    case "/Venda/create":
        VendaController::form();
        break;
    case "/Venda/form/store":
        VendaController::create();
        break;
    case "/Venda/update":
        VendaController::edit();
        break;
    case "/Venda/destroy":
        VendaController::delete();
    case "/Hello":
        phpinfo();
        break;
    case "/autenticar":
        LoginController::autenticar();
        break;
}