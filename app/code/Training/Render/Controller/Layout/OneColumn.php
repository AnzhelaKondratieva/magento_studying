<?php


namespace Training\Render\Controller\Layout;

use Magento\Framework\App\Action\HttpGetActionInterface;

class OneColumn implements HttpGetActionInterface
{

    private $resultPageFactory;
    private $request;

    public function __construct(
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->request = $request;
    }

    public function execute()
    {
//        echo $this->request->getFullActionName();
//        exit();
        return $this->resultPageFactory->create();
    }
}
