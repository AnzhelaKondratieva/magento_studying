<?php


namespace Training\ProductCustomization\Plugin\View;


class Description
{

    public function beforeToHtml(
        \Magento\Catalog\Block\Product\View\Description $subject
    ) {

        /*$subject->getProduct()->setDescription('Test description');

        return [null];*/
        $subject->setTemplate('Training_ProductCustomization::description.phtml');
    }
}

