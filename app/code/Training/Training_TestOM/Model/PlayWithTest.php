<?php


namespace Training\Training_TestOM\Model;

use Training\Training_TestOM\Model\TestFactory;
use Training\Training_TestOM\Model\Test;

class PlayWithTest
{
    private $testObject;
    private $testObjectFactory;
    private $manager;

    public function __construct(
        Test $testObject,
        TestFactory $testObjectFactory,
        ManagerCustomImplementaion $manager
    ) {
        $this->testObject = $testObject;
        $this->testObjectFactory = $testObjectFactory;
        $this->manager = $manager;
    }

    public function run()
    {
        $this->testObject->log();

        $customArrayList = ['item1' => 'aaaaa', 'item2' => 'bbbbb'];
        $newTestObject = $this->testObjectFactory->create([
            'arrayList' => $customArrayList,
            'manager' => $this->manager
        ]);

        $newTestObject->log();
    }
}
