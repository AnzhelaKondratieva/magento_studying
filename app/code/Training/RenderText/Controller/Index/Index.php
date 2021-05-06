<?php


namespace Training\RenderText\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RawFactory;

class Index extends Action implements HttpGetActionInterface
{

    private $resultRawFactory;

    public function __construct(
        Context $context,
        RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }

    public function execute()
    {
//        $this->getResponse()->appendBody('simple text');
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents('simple text');
    }
}
