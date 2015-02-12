<?php

namespace Eccube\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends AbstractController
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
		$app['eccube.event.dispatcher']->dispatch('eccube.controller.order::add');

		$total = $app['eccube.service.purchase']->calc();
		$app['eccube.service.order']->insert($total);
		return 'order completed';
	}
}
