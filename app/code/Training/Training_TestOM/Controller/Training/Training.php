<?php


namespace Training\Training_TestOM\Controller\Training;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;
use Training\Training_TestOM\Model\Test;

class Training implements HttpGetActionInterface
{
    private $test;

    public function __construct(
        Test $test
    )
    {
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->log();
    }
}
