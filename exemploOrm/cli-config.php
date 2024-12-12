<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\DBAL\Connection;
require_once 'vendor/autoload.php';
$config = ORMSetup::createAttributeMetadataConfiguration(paths: [__DIR__."/src/model"],
isDevMode: true
);
$dbParams = [
    "driver" => "pdo_mysql",
    "user" => "root",
    "password"=> "",
    "host"=> "127.0.0.1",
    "dbname"=> "ifpr_orm",
];

$conn = DriverManager::getConnection($dbParams);    
$entityManager = new EntityManager($conn, $config);