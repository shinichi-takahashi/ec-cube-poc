<?php

namespace Eccube\Service;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class PurchaseService extends AbstractService
{
	private $app;

	public function __construct(Application $app)
	{
		$this->app = $app;
	}

	public function calc() {
		return 105;
	}
}