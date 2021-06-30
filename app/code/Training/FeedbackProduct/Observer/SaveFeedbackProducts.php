<?php

namespace Training\FeedbackProduct\Observer;

class SaveFeedbackProducts implements \Magento\Framework\Event\ObserverInterface
{
    private $feedbackProducts;
    public function __construct(
        \Training\FeedbackProduct\Model\FeedbackProducts $feedbackProducts
    ) {
        $this->feedbackProducts = $feedbackProducts;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $feedback = $observer->getFeedback();
        $this->feedbackProducts->saveProductRelations($feedback);
    }
}
