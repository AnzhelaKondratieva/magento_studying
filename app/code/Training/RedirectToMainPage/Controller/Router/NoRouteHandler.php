<?php


namespace Training\RedirectToMainPage\Controller\Router;


use Magento\Framework\App\Router\NoRouteHandlerInterface;
use Magento\Framework\App\RequestInterface;

class NoRouteHandler implements NoRouteHandlerInterface
{

    public function process(RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerPath = 'index';
        $controllerName = 'index';
        $request->setModuleName($moduleName)
            ->setControllerName($controllerPath)
            ->setActionName($controllerName);
        return true;
    }
}
