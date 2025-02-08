<?php
use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

$query = $entityManager->createQuery('
 DELETE FROM Entities\Produto p 
 WHERE p.nome LIKE :prefixo
 ');
 $query->setParameter(':prefixo','%s');
 $query->execute();
 echo "Dados Excluidos com sucesso\n";
?>