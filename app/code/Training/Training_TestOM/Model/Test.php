<?php


namespace Training\Training_TestOM\Model;

use Training\Training_TestOM\Model\ManagerInterface;


class Test
{
    private $manager;
    private $arrayList;
    private $name;
    private $number;

    public function __construct(
        ManagerInterface $manager,
        $name,
        $number,
        array $arrayList
    ) {
        $this->manager = $manager;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
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
    }
}
