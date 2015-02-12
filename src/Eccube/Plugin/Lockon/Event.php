<?php

namespace Eccube\Plugin\Lockon;

use Symfony\Component\EventDispatcher\Event as SfEvent;

class Event extends SfEvent
{
	public function __construct()
	{
	}

	public function sample()
	{
		echo 'called event sample';
	}
}