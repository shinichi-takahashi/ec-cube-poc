<?php

namespace Eccube\Plugin\OtherVendor;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class OtherVendor implements EventSubscriberInterface
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
		echo 'Called method:: OtherVendor\onControllerOrderAdd<br />';
		$event = new Event();
		$event->sample();
	}
}