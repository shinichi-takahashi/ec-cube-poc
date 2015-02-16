<?php

$app->get('/order/{orderId}', '\\Eccube\\Controller\\OrderController::index');
$app->match('/order/add', '\\Eccube\\Controller\\OrderController::add')->method('GET|POST');

$app->get('/product/{productId}', '\\Eccube\\Controller\\ProductController::index');

$app->match('/plugin/install', '\\Eccube\\Controller\\PluginController::install')->method('GET|POST');