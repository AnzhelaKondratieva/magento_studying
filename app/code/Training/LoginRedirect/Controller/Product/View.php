<?php


namespace Training\LoginRedirect\Controller\Product;


use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\View\Result\PageFactory;

class View extends \Magento\Catalog\Controller\Product\View
{
    protected $customerSession;

    protected $redirectFactory;

    public function __construct(
        Context $context,
        \Magento\Catalog\Helper\Product\View $viewHelper,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory,
        PageFactory $resultPageFactory,
        \Psr\Log\LoggerInterface $logger = null,
        \Magento\Framework\Json\Helper\Data $jsonHelper = null,
        Session $customerSession,
        RedirectFactory $redirectFactory
    ) {
        $this->customerSession = $customerSession;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context, $viewHelper, $resultForwardFactory, $resultPageFactory, $logger, $jsonHelper);
    }

    public function execute()
    {
        if (!$this->customerSession->isLoggedIn()) {
            return $this->redirectFactory->create()->setPath('customer/account/login');
        }
        return parent::execute();
    }
}
