<?php

namespace Eccube\Service;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class OrderService
{
	public function find($orderId) {
		return $app['orm.em']->getRepository('Eccube\\Entity\\Products')->find($orderId);
	}
}