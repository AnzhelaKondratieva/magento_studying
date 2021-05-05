<?php

namespace Training\Test\App;

use Magento\Framework\App\RouterListInterface;
use Magento\Framework\App\ResponseInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\RequestInterface;

class FrontController extends \Magento\Framework\App\FrontController
{

    protected $routerList;

    protected $response;

    private $logger;

    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        LoggerInterface $logger
    ) {
        $this->routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
        parent::__construct($routerList, $response);
    }
    public function dispatch(RequestInterface $request)
    {
        foreach ($this->routerList as $router) {
            $this->logger->info(get_class($router));
        }
        return parent::dispatch($request);
    }
}
