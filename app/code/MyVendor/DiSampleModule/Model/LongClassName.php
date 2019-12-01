<?php

namespace MyVendor\DiSampleModule\Model;

class LongClassName
{
	protected $name;

	public function __construct(
		string $name
	) {
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}