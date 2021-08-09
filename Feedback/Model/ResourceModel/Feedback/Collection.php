<?php

namespace Nishar\Feedback\Model\ResourceModel\Feedback;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     * @codingStandardsIgnoreStart
     */
    protected $_idFieldName = 'feedback_id';

    /** Collection initialisation */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Nishar\Feedback\Model\Feedback', 'Nishar\Feedback\Model\ResourceModel\Feedback');
    }
}
