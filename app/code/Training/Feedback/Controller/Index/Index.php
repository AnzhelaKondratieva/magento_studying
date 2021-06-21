<?php


namespace Training\Feedback\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    private $pageResultFactory;
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageResultFactory
    ) {
        $this->pageResultFactory = $pageResultFactory;
    }
    public function execute()
    {
        return $this->pageResultFactory->create();
    }
}
