<?php
use Entities\Endereco;

require __DIR__ . '/../../cli-config.php';

$query = $entityManager->createQuery('
    SELECT e.rua FROM Entities\Endereco e WHERE e.rua LIKE :prefixo
');
$query->setParameter(':prefixo','A%');

$endereco = $query->getResult();
// Exibir o produto
var_dump($endereco);