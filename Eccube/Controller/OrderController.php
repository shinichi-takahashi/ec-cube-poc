<?php

namespace Eccube\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class OrderController
{
	public function index(\Silex\Application $app)
	{
		$result = $app['eccube.service.order']->find($app['request']->get('orderId'));
		if ($result) {
			return 'service ok';
		} else {
			return 'service ng';
		}
	}


}
