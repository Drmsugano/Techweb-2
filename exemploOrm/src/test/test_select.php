<?php
require __DIR__ ."/../../cli-config.php";
use Models\Produto;

$produto = $entityManager->find("Models\Produto",1);