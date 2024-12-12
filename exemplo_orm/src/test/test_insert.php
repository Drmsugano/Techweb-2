<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

$produto = new Produto();
$produto->nome = "Camiseta";
$produto->preco = 49.90;

// Preparar para presitir o produto
$entityManager->persist($produto);
// Realiza a persistência no banco
$entityManager->flush();

echo "Dados persistidos com sucesso!\n";

?>