<?php

namespace MyVendor\DiSampleModule\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomObserver implements ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);
		$logger->info("Custom Observer Called");
		$logger->info($observer->getName());
		$logger->info($observer->getData('name'));
	}
}