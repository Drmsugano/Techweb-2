<?php
use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

$query = $entityManager->createQuery('
 UPDATE Entities\Produto p 
 SET p.preco = 15.00
 WHERE p.preco < 10.00
 ');
 $query->execute();
 echo "Dados Alterados com sucesso";
?>