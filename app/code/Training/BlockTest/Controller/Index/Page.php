<?php


namespace Training\BlockTest\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\LayoutFactory;
use Magento\Framework\Controller\Result\RawFactory;

class Page extends Action implements HttpGetActionInterface
{
    private $layoutFactory;

    private $resultRawFactory;

    public function __construct(
        LayoutFactory $layoutFactory,
        Context $context,
        RawFactory $resultRawFactory
    ) {
        $this->layoutFactory = $layoutFactory;
        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Training\BlockTest\Block\Test');
//        $this->getResponse()->appendBody($block->toHtml());
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents($block->toHtml());

        return $resultRaw;
    }
}
