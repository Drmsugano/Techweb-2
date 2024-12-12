<?php
require_once __DIR__.'/../../cli-config.php';
use Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
ConsoleRunner::run(new SingleConnectionProvider($entityManager));
