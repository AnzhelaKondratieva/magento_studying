<?php


namespace Training\TestOM\Controller\Training;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;
use Training\TestOM\Model\Test;

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
