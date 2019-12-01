<?php

namespace MyVendor\DiSampleModule\Model;

class Sample extends \MyVendor\DiSampleModule\Block\Sample
{
	public function getAdditionalName()
	{
		return 'additional name';
	}
}