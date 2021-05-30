<?php


namespace Training\ProductGetInfo\ViewModel;


use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Stock implements ArgumentInterface
{
    private $request;

    public function __construct(
        Http $request
    ) {
        $this->request = $request;
    }

    public function getProductId()
    {
        return (int)$this->request->getParam('id');
    }
}
