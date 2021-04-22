<?php


namespace Training\Training_TestOM\Model;

use Training\Training_TestOM\Model\ManagerInterface;
use Training\Training_TestOM\Model\ManagerInterfaceFactory;

class Test
{
    private $manager;
    private $arrayList;
    private $name;
    private $number;
    private $managerFactory;

    public function __construct(
        ManagerInterface $manager,
        $name,
        $number,
        array $arrayList,
        ManagerInterfaceFactory $managerFactory
    ) {
        $this->manager = $manager;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
        $this->managerFactory = $managerFactory;
    }

    public function log()
    {
        print_r(get_class($this->manager));
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
        echo '<br>';
        $newManager = $this->managerFactory->create();
        print_r(get_class($newManager));
    }
}
