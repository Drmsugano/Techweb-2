<?php
use Controller\LivroController;
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
switch ($url) {
    case "/":
        LivroController::index($entityManager);
        break;
    case "/livro/store":
        LivroController::create($entityManager);
        break;
    case "/livro/read":
        LivroController::read($entityManager);
        break;
    case "/livro/update":
        LivroController::update($entityManager);
        break;
    case "/livro/remove":
        LivroController::remove($entityManager);
        break;
}
