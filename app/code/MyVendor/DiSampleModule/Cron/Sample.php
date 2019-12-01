<?php

namespace MyVendor\DiSampleModule\Cron;

class Sample
{
	public function execute()
	{
		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);
		$logger->info('Cron of DiSampleModule executed at: '.date('Y-m-d H:i:s'));
	}
}