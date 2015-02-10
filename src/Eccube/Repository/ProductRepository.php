<?php

namespace Eccube\Repository;

use Eccube\Application;
use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
	public function (Application $app)
	{
		return $app['orm.em']->getRepository('Eccube\\Entity\\Products')->find('1');
	}
}