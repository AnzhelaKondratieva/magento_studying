<?php


namespace Training\Reviews\ViewModel;


use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class RandomReview implements ArgumentInterface
{
    private $urlBuilder;

    public function __construct(
        UrlInterface $urlBuilder
    ) {
        $this->urlBuilder = $urlBuilder;
    }

    public function getLink()
    {
        return $this->urlBuilder->getUrl('training_reviews/review/index');
    }
}
