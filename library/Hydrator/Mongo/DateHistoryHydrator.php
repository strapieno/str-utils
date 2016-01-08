<?php
namespace Strapieno\Utils\Hydrator\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Hydrator\ClassMethods;
use Matryoshka\Model\Wrapper\Mongo\Hydrator\Strategy\MongoDateStrategy;

/**
 * Class DateHistoryHydrator
 */
class DateHistoryHydrator extends ClassMethods
{
    /**
     * {@inheritdoc}
     */
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);
        $this->addStrategy('date_created', new MongoDateStrategy());
        $this->addStrategy('date_modified', new MongoDateStrategy);
    }
}