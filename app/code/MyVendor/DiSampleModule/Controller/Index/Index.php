<?php

namespace MyVendor\DiSampleModule\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
	{
		$this->_eventManager->dispatch('di_samplemodule_controller_called', ['name' => 'xyz']);

		$resultPage = $this->resultPageFactory->create();
		return $resultPage;
	}
}