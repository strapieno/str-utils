<?php

namespace Strapieno\Utils\Hydrator;

use Matryoshka\Model\Hydrator\ClassMethods;
use Matryoshka\Model\Hydrator\Strategy\DateTimeStrategy;

/**
 * Class DateHystoryHydrator
 */
class DateHystoryHydrator extends ClassMethods
{
    /**
     * {@inheritdoc}
     */
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);
        $this->addStrategy('date_created', new DateTimeStrategy);
        $this->addStrategy('date_modified', new DateTimeStrategy);
    }
}