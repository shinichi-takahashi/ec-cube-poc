<?php

namespace Eccube\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class OrderController
{
	public function index(Application $app)
	{
		$result = $app['eccube.service.order']->find($app['request']->get('orderId'));
		if ($result) {
			return 'service ok';
		} else {
			return 'service ng';
		}
	}

	public function add(Application $app)
	{
		return $app['eccube.service.order']->insert();
	}

}
