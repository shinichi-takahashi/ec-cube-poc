<?php

use Eccube\Controller;
use Eccube\Service;
use Eccube\Event\EventSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcher;

// Conroller
$app['eccube.controller.order'] = function() use ($app) {
	return new Controller\OrderController();
};

// Service
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


// Event
$app['eccube.event.dispatcher'] = $app->share(function($app) {
	return new EventDispatcher();
});
// Event
$app['eccube.event.subscriber'] = function() use ($app) {
	return new EventSubscriber($app);
};