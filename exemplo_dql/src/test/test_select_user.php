<?php

use Entities\Usuario;

require __DIR__ . '/../../cli-config.php';

$usuario = $entityManager->find("Entities\Usuario", 1);
// Exibir o produto
var_dump($usuario->nome);
var_dump($usuario->id);
var_dump($usuario->endereco->rua);
var_dump($usuario->endereco->numero);
?>