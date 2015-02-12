<?php

namespace Eccube\Plugin\OtherVendor;

use Symfony\Component\EventDispatcher\Event as SfEvent;

class Event extends SfEvent
{
	public function __construct()
	{
	}

	public function sample()
	{
		echo '[[OtherVendorSample]]<br />';
	}
}