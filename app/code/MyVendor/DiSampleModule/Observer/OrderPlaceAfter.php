<?php

namespace MyVendor\DiSampleModule\Observer;

use Magento\Framework\Event\ObserverInterface;

class OrderPlaceAfter implements ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);
		$logger->info($observer->getOrder()->getRealOrderId());
	}
}