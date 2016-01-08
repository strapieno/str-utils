<?php

namespace Strapieno\Utils\Model\Object;

use Zend\Stdlib\Hydrator\HydratorAwareTrait;

/**
 * Class AbstractObject
 */
abstract class AbstractObject implements ObjectInterface
{
    use HydratorAwareTrait;

    // TODO ADD DEFAULT HYDRATOR
}