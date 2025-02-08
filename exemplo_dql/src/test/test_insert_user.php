<?php

use Entities\Endereco;
use Entities\Usuario;
use Entities\Grupo;

require __DIR__ . '/../../cli-config.php';


$endereco = new Endereco();
$endereco->rua = "Alameda";
$endereco->numero = 12;

$usuario = new Usuario();
$usuario->nome = "Naruto";
$usuario->endereco = $endereco;
$grupo = $entityManager->find("Entities\Grupo",2);
$usuario->grupos[] = $grupo;
// Preparar para presitir o produto
$entityManager->persist($usuario);
// Realiza a persistência no banco
$entityManager->flush();

echo "Dados persistidos com sucesso!\n";

?>