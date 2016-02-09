<?php
namespace Strapieno\Utils\Model\Entity\Place;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Entity\TypeAwareInterface;
use Strapieno\Utils\Model\Entity\TypeAwareTrait;
use Strapieno\Utils\Model\Object\Place\PlaceInterface;
use Strapieno\Utils\Model\Object\Place\PlaceTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class PlaceEntity
 */
class PlaceEntity extends AbstractActiveRecord implements
    PlaceInterface,
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    TypeAwareInterface
{
    use DateHistoryAwareTrait;
    use PlaceTrait;
    use TypeAwareTrait;
}