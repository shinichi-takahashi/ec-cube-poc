<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;

$app = new \Silex\Application();
$app['debug'] = true;

// DIがんばる
$app['eccube.service.order'] = function() {
	return new Eccube\Service\OrderService();
};

// Router読み込み
require_once __DIR__ . '/Routes.php';

$app->run();
