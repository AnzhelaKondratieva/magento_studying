<?php


namespace Training\BlockTest\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Context;
use Magento\Framework\View\LayoutFactory;

class Page extends Action implements HttpGetActionInterface
{
    private $layoutFactory;

    public function __construct(
        LayoutFactory $layoutFactory,
        \Magento\Framework\App\Action\Context $context
    ) {
        $this->layoutFactory = $layoutFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Training\BlockTest\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
