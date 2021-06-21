<?php

namespace Training\Feedback\Model\ResourceModel\Entity;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'feedback_id';

    protected function _construct()
    {
        $this->_init(
        \Training\Feedback\Model\Feedback::class,
        \Training\Feedback\Model\ResourceModel\Feedback::class
        );
    }
}
