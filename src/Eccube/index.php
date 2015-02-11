<?php

require_once __DIR__.'/../../vendor/autoload.php';

$app = new \Eccube\Application();
require_once __DIR__ . '/Routes.php';
require_once __DIR__ . '/Container.php';
$app->run();
