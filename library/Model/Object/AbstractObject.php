<?php
namespace Strapieno\Utils\Model\Object;

use Strapieno\Utils\Hydrator\Model\Object\ClassMethods;
use Zend\Stdlib\Hydrator\HydratorAwareTrait;

/**
 * Class AbstractObject
 */
abstract class AbstractObject implements ObjectInterface
{
    use HydratorAwareTrait;

    public function getHydrator()
    {
        if (!$this->hydrator) {
            $this->hydrator = new ClassMethods(true);
        }

        return $this->hydrator;
    }
}