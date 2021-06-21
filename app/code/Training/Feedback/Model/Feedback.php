<?php

namespace Training\Feedback\Model;

class Feedback extends \Magento\Framework\Model\AbstractModel
{

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function __construct()
    {
        $this->_init(\Training\Feedback\Model\ResourceModel\Feedback::class);
    }
}
