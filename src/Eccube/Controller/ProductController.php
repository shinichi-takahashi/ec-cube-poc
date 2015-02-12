<?php

namespace Eccube\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
	public function index(\Silex\Application $app)
	{
		$result = $app['orm.em']
					->getRepository('Eccube\\Entity\\Products')
					->find($app['request']->get('productId'));

		if ($result) {
			return 'service ok';
		} else {
			return 'service ng';
		}
	}


}
