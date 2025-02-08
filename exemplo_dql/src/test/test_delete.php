<?php

use Entities\Produto;

require __DIR__ . '/../../cli-config.php';

$produto = $entityManager->find("Entities\Produto", 1);
$entityManager->remove($produto);
$entityManager->flush();

echo "Dado apagado\n";

?>