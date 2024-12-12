<?php
require __DIR__ ."/../../cli-config.php";
use Models\Produto;
$produto = new Produto();
$produto->nome = "PC";
$produto->preco = 56;

$entityManager->persist($produto);
$entityManager->flush();