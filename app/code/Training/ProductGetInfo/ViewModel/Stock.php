<?php


namespace Training\ProductGetInfo\ViewModel;


use Magento\Framework\App\Request\Http;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Stock implements ArgumentInterface
{
    private $request;

    private $urlBuilder;

    public function __construct(
        Http $request,
        UrlInterface $urlBuilder
    ) {
        $this->request = $request;
    }

    public function getProductId()
    {
        return (int)$this->request->getParam('id');
    }
}
