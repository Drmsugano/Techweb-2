<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

// Busca todos os produtos com preço maior que 20
$query = $entityManager->createQuery("SELECT p FROM Entities\Produto p WHERE p.preco > 20");
$produtos = $query->getResult();

// Exibe todos os produtos
foreach($produtos as $produto) {
    var_dump($produto);
    echo "\n";
}
?>