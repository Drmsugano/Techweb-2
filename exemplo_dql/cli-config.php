<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths:[__DIR__ . '/src/entities'],
    isDevMode:true,
);

// Parâmetros de conexão com o banco de dados
$dbParams = [
    'driver' => 'pdo_mysql',
    'user'   => 'root',
    'password'=> '',
    'host'   => 'localhost',
    'dbname' => 'ifpr_orm',
];

// Obter a conexão com o bando de dados
$conn = DriverManager::getConnection($dbParams);

// Criar o EntityManager
$entityManager = new EntityManager($conn, $config);

?>