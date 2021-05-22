<?php


namespace Training\BlockTest\Block;


use Magento\Framework\View\Element\AbstractBlock;
use Magento\Framework\View\Element\Template\Context;

class Test extends AbstractBlock
{

    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    protected function _toHtml()
    {
        return "<b>Hello world from block!</b>";
    }
}
