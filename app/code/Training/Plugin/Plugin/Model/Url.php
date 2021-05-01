<?php


namespace Training\Plugin\Plugin\Model;


use Magento\Backend\Model\View\Result\RedirectFactory;
use Magento\Framework\UrlInterface;

class Url
{
    private $redirectFactory;

    public function __construct(
        RedirectFactory $redirectFactory
    ) {
        $this->redirectFactory = $redirectFactory;
    }

    public function beforeGetUrl(
        UrlInterface $subject,
        $routePath = null,
        $routeParams = null
    ) {
        if ($routePath == 'customer/account/create') {
            return ['customer/account/login', null];
        }
    }
}
