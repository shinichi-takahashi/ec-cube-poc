<?php

use Eccube\Service;

$app['eccube.service.purchase'] = function() use ($app) {
	return new Service\PurchaseService($app);
};

$app['eccube.service.order'] = function() use ($app) {
	return new Service\OrderService($app);
};
$app['eccube.service.product'] = function() use ($app) {
	return new Service\ProductService($app);
};
$app['eccube.service.customer'] = function() use ($app) {
	return new Service\CustomerService($app);
};
