<?php


namespace Training\ProductObserver\Observer;


use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\App\ActionFlag;
use Magento\Framework\Event\Observer;
use Magento\Framework\App\ActionInterface;

class RedirectToLogin implements ObserverInterface
{

    private $redirect;

    private $actionFlag;

    public function __construct(
        RedirectInterface $redirect,
        ActionFlag $actionFlag
    ) {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');
        if ($request->getModuleName() == 'catalog'
            && $request->getControllerName() == 'product'
            && $request->getActionName() == 'view'
        ) {
            $controller = $observer->getEvent()->getData('controller_action');
            $this->actionFlag->set('', ActionInterface::FLAG_NO_DISPATCH, true);
            $this->redirect->redirect($controller->getResponse(), 'customer/account/login');
        }
    }
}
