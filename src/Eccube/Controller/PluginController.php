<?php

namespace Eccube\Controller;

use Silex\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;

class PluginController extends AbstractController
{
	public function install(\Silex\Application $app)
	{
		$finder = new Finder();
		$finder
			->in(__DIR__ . '/../Plugin')
			->directories()
			->exclude('Entity')
			->exclude('Repository')
		;

		$isUpdate = false;
		$resource = __DIR__ . '/../Resources/doctrine';
		foreach ($finder as $dir) {
			$plugin = $dir->getFilename();
			$path = $dir->getRealpath();

			$from = $path . '/' . $plugin . '.orm.yml';
			$to  = $resource . '/' . $plugin . '.plugin.orm.yml';
			if (file_exists($from)) {
				copy($from, $to);
				$isUpdate = true;
			}
			
		}
		if ($isUpdate) {
			system('sh ../vendor/bin/doctrine orm:generate-entities ../../src', $ret);
			system('sh ../vendor/bin/doctrine orm:schema-tool:update', $ret);
		}

		return 'install complete!';
	}

}
