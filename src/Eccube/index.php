<?php

require_once __DIR__.'/../../vendor/autoload.php';

$app = new \Eccube\Application();
require_once __DIR__ . '/Container.php';
require_once __DIR__ . '/Routes.php';
$app['eccube.event.subscriber']->subscribe($app);
$app->run();
