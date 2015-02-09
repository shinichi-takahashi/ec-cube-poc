<?php

namespace Eccube\Repository;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

interface RepositoryInterface
{
	public function find(\Silex\Application $app, Request $request);
	public function delete(\Silex\Application $app, Request $request);
	public function update(\Silex\Application $app, Request $request);
	public function insert(\Silex\Application $app, Request $request);
}
