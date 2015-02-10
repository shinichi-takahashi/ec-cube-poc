<?php

$app->get('/order/{orderId}', '\\Eccube\\Controller\\OrderController::index');
$app->get('/product/{productId}', '\\Eccube\\Controller\\ProductController::index');