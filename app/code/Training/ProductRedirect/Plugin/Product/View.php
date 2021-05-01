<?php


namespace Training\ProductRedirect\Plugin\Product;

use Magento\Customer\Model\Session;
use Magento\Framework\Controller\Result\RedirectFactory;

class View
{
    protected $customerSession;
    protected $redirectFactory;
    public function __construct(
        Session $customerSession,
        RedirectFactory $redirectFactory
    ) {
        $this->customerSession = $customerSession;
        $this->redirectFactory = $redirectFactory;
    }
    public function aroundExecute(
        \Magento\Catalog\Controller\Product\View $subject,
        \Closure $proceed
    ) {
        if (!$this->customerSession->isLoggedIn()) {
            return $this->redirectFactory->create()->setPath('customer/account/login');
        }

        return $proceed();
    }
}

