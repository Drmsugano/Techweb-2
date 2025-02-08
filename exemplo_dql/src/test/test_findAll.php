<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

// Busca todos os produtos
$produtoRepository = $entityManager->getRepository("Entities\Produto");
$produtos = $produtoRepository->findAll();

// Exibe todos os produtos
foreach($produtos as $produto) {
    var_dump($produto);
    echo "\n";
}
?>