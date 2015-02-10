<?php

namespace Eccube\Service;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductService
{

	private $app;

	public function __construct (Application $app) {
		$this->app = $app;
	}

	public function find($productId) {
		return $this->app['orm.em']->getRepository('Eccube\\Entity\\Products')->find($productId);
	}
}