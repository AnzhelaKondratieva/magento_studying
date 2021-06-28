<?php

namespace Training\FeedbackProduct\Observer;

use Magento\Framework\Event\ObserverFactory;

class SaveFeedbackProducts implements ObserverInterface
{
    private $feedbackProducts;
    public function __construct(
        \Training\FeedbackProduct\Model\FeedbackProducts $feedbackProducts
    ) {
        $this->feedbackProducts = $feedbackProducts;
    }
    public function execute(ObserverFactory $observer)
    {
        $feedback = $observer->getFeedback();
        $this->feedbackProducts->saveProductRelations($feedback);
    }
}
