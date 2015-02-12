<?php

namespace Eccube\Event;

use Symfony\Component\Finder\Finder;

class EventSubscriber
{
	private $app;

	public function __construct($app)
	{
		$this->app = $app;
	}

	public function subscribe()
	{
		$finder = new Finder();
		$finder->in(__DIR__ . '/../Plugin')->directories();
		
		foreach ($finder as $dir) {
			$plugin = $dir->getFilename();
			
			$initClass = '\\Eccube\\Plugin\\' . $plugin . '\\' . $plugin ;
			$eventClass = '\\Eccube\\Plugin\\' . $plugin . '\\Event';
			$subscriber = new $initClass($this->app);

	        $events = $subscriber->getSubscribedEvents();

	        foreach ($events as $event => $subscribers) {
				$this->app[$event] = function() use ($eventClass) {
					return new $eventClass();
				};
	        }

	        $this->app['eccube.event.dispatcher']->addSubscriber($subscriber);
		}
	}	
}