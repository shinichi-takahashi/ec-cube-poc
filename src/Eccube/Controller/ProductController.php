<?php

namespace Eccube\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductController
{
	public function index(\Silex\Application $app)
	{
		$result = $app['eccube.service.product']->find($app['request']->get('productId'));
		if ($result) {
			return 'service ok';
		} else {
			return 'service ng';
		}
	}


}
