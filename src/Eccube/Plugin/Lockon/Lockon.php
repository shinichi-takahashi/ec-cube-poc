<?php

namespace Eccube\Plugin\Lockon;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Lockon implements EventSubscriberInterface
{
	private $app;

	public function __construct($app)
	{
		$this->app = $app;
	}
	
    public static function getSubscribedEvents() {

        return array(
            'eccube.controller.order::add' => array(
                array('onControllerOrderAdd', 10),
            )
        );
    }

	public function onControllerOrderAdd()
	{
		echo 'Called method:: onControllerOrderAdd';
	}
}