<?php

namespace MyVendor\DiSampleModule\Block;

class Sample extends \Magento\Framework\View\Element\Template
{
	protected $obj1;
	protected $obj2;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\MyVendor\DiSampleModule\Model\LongClassName $obj1,
		\MyVendor\DiSampleModule\Model\LongClassName $obj2
	) {
		parent::__construct($context);
		$this->obj1 = $obj1;
		$this->obj2 = $obj2;
	}

	public function getName()
	{
		return $this->obj1->getName();
	}

	public function getAnotherName()
	{
		return $this->obj2->getName();
	}
}