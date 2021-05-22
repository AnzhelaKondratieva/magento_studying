<?php


namespace Training\CustomTemplate\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\View\Layout;

class Index  implements HttpGetActionInterface
{

    private $resultRawFactory;

    private $layoutFactory;

    public function __construct(
        Context $context,
        RawFactory $resultRawFactory,
        \Magento\Framework\View\LayoutFactory $layoutFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
        $this->layoutFactory = $layoutFactory;
    }

    public function execute()
    {
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock(\Magento\Framework\View\Element\Template::class);
        $block->setTemplate('Training_CustomTemplate::test.phtml');
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($block->toHtml());
    }
}
