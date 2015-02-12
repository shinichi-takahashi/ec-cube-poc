<?php

namespace Eccube\Service;

use Eccube\Application;

abstract class AbstractService
{
	public function __construct(Application $app)
	{
		var_dump($app);
	}
}