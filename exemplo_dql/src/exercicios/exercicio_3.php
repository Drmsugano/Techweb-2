<?php
use Entities\Usuario;
require __DIR__ . '/../../cli-config.php';

$grupoId = 1;

$query = $entityManager->createQuery(
    'SELECT COUNT(u.id) 
     FROM Entities\Usuario u 
     JOIN u.grupos g 
     WHERE g.id = :grupoId'
);
$query->setParameter('grupoId', $grupoId);

$contagemUsuarios = $query->getSingleScalarResult();

echo "Número de usuários no grupo: " . $contagemUsuarios;
echo "\n";
