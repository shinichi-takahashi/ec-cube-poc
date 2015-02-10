<?php

namespace Eccube;

use Symfony\Component\HttpFoundation\Request as BaseRequest;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Yaml\Yaml;


class Application extends \Silex\Application
{

    protected static $app;

	public function __construct(array $values = array())
	{
		$app = $this;
		static::$app = $this;
        parent::__construct($values);

		$app['debug'] = true;

		// Configをロード
		$app['config'] = function () {
		    $config = Yaml::parse(__DIR__ .'/../../app/Config/config.yml');
		    return $config;
		};

		// ORM設定
		$app->register(new \Silex\Provider\DoctrineServiceProvider(), array(
		    'db.options' => $app['config']['doctrine']['orm']
		));
		$app->register(new \Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider, array(
		    'orm.em.options' => array(
		    	'auto_generate_proxies' => false,
		        'mappings' => array(
		            array(
		                'type' => 'simple_yml',
		                'namespace' => 'Eccube\Entity',
		                'path' => __DIR__ . '/Resource/doctrine',
		            )
		        )
		    ),
		));




		// DIがんばる
		$app['eccube.service.order'] = function() {
			return new Service\OrderService();
		};
		$app['eccube.service.product'] = function() {
			return new Service\ProductService();
		};

	}

    public function run(BaseRequest $request = null)
    {
        if (null === $request) {
            $request = BaseRequest::createFromGlobals();
        }
		// Router読み込み

        parent::run($request);
    }

}