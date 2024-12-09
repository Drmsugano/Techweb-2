<?php
use Controller\LivroController;
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
switch ($url) {
    case "/":
        LivroController::index($entityManager);
        break;
    case "/create":
        LivroController::cadastro();
        break;
    default:
        echo "Erro";
        break;
}
