<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

$produto = new Produto();
$produto->nome = "Camiseta";
$produto->preco = 49.90;

$produto2 = new Produto();
$produto2->nome = "Camiseta";
$produto2->preco = 9.90;

$produto3 = new Produto();
$produto3->nome = "Camisetas";
$produto3->preco = 429.90;


$entityManager->persist($produto);
$entityManager->persist($produto2);
$entityManager->persist($produto3);
// Realiza a persistência no banco
$entityManager->flush();

echo "Dados persistidos com sucesso!\n";

?>