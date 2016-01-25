<?php
namespace Strapieno\Utils\Model\Object;

use Strapieno\Utils\DataStructure\RefIdentityCollection;
use Strapieno\Utils\DataStructure\RefIdentotyCollectionInterface;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Hydrator\HydratorAwareTrait;

/**
 * Class ObjectCollection
 */
class ObjectCollection
    extends RefIdentityCollection
    implements RefIdentotyCollectionInterface, HydratorAwareInterface
{
    use HydratorAwareTrait;
}