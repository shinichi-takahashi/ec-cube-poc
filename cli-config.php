<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'vendor/autoload.php';

$app = new Eccube\Application();

$entityManager = $app['orm.em'];

return ConsoleRunner::createHelperSet($entityManager);