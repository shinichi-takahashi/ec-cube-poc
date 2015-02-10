<?php

namespace Eccube\Service;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class OrderService
{
	public function find($orderId) {
		echo $orderId;
		return false;
	}
}