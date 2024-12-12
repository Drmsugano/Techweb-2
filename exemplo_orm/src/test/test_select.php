<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

$produto = $entityManager->find("Entities\Produto", 1);
// Exibir o produto
var_dump($produto);
?>