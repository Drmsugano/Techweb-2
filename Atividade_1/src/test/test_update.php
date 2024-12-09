<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

// Busca o produto de id = 1 do banco de dados
$produto = $entityManager->find("Entities\Produto", 1);
$produto->preco = 59.90; // Atualiza o preco
$entityManager->flush(); // Persiste mudanças no BD

echo "Dados atualizados!\n";
?>